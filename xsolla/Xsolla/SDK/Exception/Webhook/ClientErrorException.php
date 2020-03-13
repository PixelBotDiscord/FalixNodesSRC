<?php

namespace Xsolla\SDK\Exception\Webhook;

class ClientErrorException extends XsollaWebhookException
{
    /**
     * @return string
     */
    public function getXsollaErrorCode()
    {
        return 'CLIENT_ERROR';
    }

    /**
     * @return int
     */
    public function getHttpStatusCode()
    {
        return 400;
    }
}
