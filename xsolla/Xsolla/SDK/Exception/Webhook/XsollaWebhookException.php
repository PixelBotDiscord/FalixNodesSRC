<?php

namespace Xsolla\SDK\Exception\Webhook;

use Xsolla\SDK\Exception\XsollaException;

class XsollaWebhookException extends XsollaException
{
    /**
     * @return string
     */
    public function getXsollaErrorCode()
    {
        return 'SERVER_ERROR';
    }

    /**
     * @return int
     */
    public function getHttpStatusCode()
    {
        return 500;
    }
}
