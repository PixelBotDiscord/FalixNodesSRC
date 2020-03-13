<?php

namespace Xsolla\SDK\Exception\API;

use GuzzleHttp\Exception\BadResponseException;
use Xsolla\SDK\Exception\XsollaException;

class XsollaAPIException extends XsollaException
{
    protected static $exceptions = [
        422 => '\Xsolla\SDK\Exception\API\UnprocessableEntityException',
        403 => '\Xsolla\SDK\Exception\API\AccessDeniedException',
    ];

    protected static $messageTemplate =
<<<'EOF'
Xsolla API Error Response:

Previous Exception:
===================
%s

Request:
===================
%s

Response:
===================
%s
EOF;

    /**
     * @param  BadResponseException $previous
     * @return XsollaAPIException
     */
    public static function fromBadResponse(BadResponseException $previous)
    {
        $statusCode = $previous->getResponse()->getStatusCode();
        $message = sprintf(
            static::$messageTemplate,
            $previous->getMessage(),
            \GuzzleHttp\Psr7\str($previous->getRequest()),
            \GuzzleHttp\Psr7\str($previous->getResponse())
        );
        if (array_key_exists($statusCode, static::$exceptions)) {
            return new static::$exceptions[$statusCode]($message, 0, $previous);
        }

        return new self($message, 0, $previous);
    }
}
