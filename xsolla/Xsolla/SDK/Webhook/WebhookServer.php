<?php

namespace Xsolla\SDK\Webhook;

use Symfony\Component\HttpFoundation\Response;
use Xsolla\SDK\Exception\Webhook\XsollaWebhookException;
use Xsolla\SDK\Webhook\Message\Message;

class WebhookServer
{
    /**
     * @var WebhookAuthenticator
     */
    protected $webhookAuthenticator;

    /**
     * @var callable
     */
    protected $webhookCallback;

    /**
     * @param callable $webhookCallback
     * @param string   $projectSecretKey
     *
     * @return WebhookServer
     */
    public static function create($webhookCallback, $projectSecretKey)
    {
        return new static($webhookCallback, new WebhookAuthenticator($projectSecretKey));
    }

    /**
     * @param callable             $webhookCallback
     * @param WebhookAuthenticator $webhookAuthenticator
     *
     * @throws XsollaWebhookException
     */
    public function __construct($webhookCallback, WebhookAuthenticator $webhookAuthenticator)
    {
        if (!is_callable($webhookCallback)) {
            throw new XsollaWebhookException('$webhookCallback parameter passed to WebhookServer should be callable. Learn more about callbacks: http://php.net/manual/en/language.types.callable.php');
        }
        $this->webhookCallback = $webhookCallback;
        $this->webhookAuthenticator = $webhookAuthenticator;
    }

    /**
     * @param WebhookRequest $webhookRequest
     * @param bool           $authenticateClientIp
     */
    public function start(WebhookRequest $webhookRequest = null, $authenticateClientIp = true)
    {
        $response = $this->getSymfonyResponse($webhookRequest, $authenticateClientIp);
        $response->send();
    }

    /**
     * @param WebhookRequest $webhookRequest
     * @param bool           $authenticateClientIp
     *
     * @return Response
     */
    public function getSymfonyResponse(WebhookRequest $webhookRequest = null, $authenticateClientIp = true)
    {
        try {
            if (!$webhookRequest) {
                $webhookRequest = WebhookRequest::fromGlobals();
            }
            $this->webhookAuthenticator->authenticate($webhookRequest, $authenticateClientIp);
            $message = Message::fromArray($webhookRequest->toArray());
            $webhookResponse = call_user_func($this->webhookCallback, $message);
            if (!$webhookResponse instanceof WebhookResponse) {
                $webhookResponse = new WebhookResponse();
            }

            return $webhookResponse->getSymfonyResponse();
        } catch (\Exception $e) {
            return WebhookResponse::fromException($e)->getSymfonyResponse();
        }
    }
}
