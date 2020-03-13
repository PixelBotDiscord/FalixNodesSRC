<?php

namespace Xsolla\SDK\Webhook;

use Symfony\Component\HttpFoundation\Response;
use Xsolla\SDK\API\XsollaClient;
use Xsolla\SDK\Exception\Webhook\XsollaWebhookException;
use Xsolla\SDK\Version;

class WebhookResponse
{
    /**
     * @var int
     */
    protected $httpStatusCode;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var Response
     */
    protected $symfonyResponse;

    /**
     * @param \Exception $e
     *
     * @return WebhookResponse
     */
    public static function fromException(\Exception $e)
    {
        if ($e instanceof XsollaWebhookException) {
            return static::fromErrorCode($e->getXsollaErrorCode(), $e->getMessage(), $e->getHttpStatusCode());
        } else {
            return static::fromErrorCode('FATAL_ERROR', $e->getMessage());
        }
    }

    /**
     * @param string $xsollaErrorCode
     * @param string $message
     * @param int    $httpStatus
     *
     * @return WebhookResponse
     */
    public static function fromErrorCode($xsollaErrorCode, $message = '', $httpStatus = 500)
    {
        $body = [
            'error' => [
                'code' => $xsollaErrorCode,
                'message' => $message,
            ],
        ];
        $encodedBody = XsollaClient::jsonEncode($body);

        return new static($httpStatus, $encodedBody);
    }

    /**
     * @param int    $httpStatusCode
     * @param string $body
     */
    public function __construct($httpStatusCode = 204, $body = null)
    {
        $this->symfonyResponse = new Response($body, $httpStatusCode);
        $this->symfonyResponse->headers->set('x-xsolla-sdk', Version::getVersion());
        if ($body) {
            $contentType = 'application/json';
        } else {
            $contentType = 'text/plain';
        }
        $this->symfonyResponse->headers->set('content-type', $contentType);
    }

    /**
     * @return Response
     */
    public function getSymfonyResponse()
    {
        return $this->symfonyResponse;
    }

    protected function validateStringParameter($name, $value)
    {
        if (!is_string($value)) {
            throw new XsollaWebhookException(sprintf(
                '%s should be non-empty string. %s given',
                $name,
                is_object($value) ? get_class($value) : gettype($value)
            ));
        }
        if ('' === $value) {
            throw new XsollaWebhookException($name.' should be non-empty string. Empty string given');
        }
    }
}
