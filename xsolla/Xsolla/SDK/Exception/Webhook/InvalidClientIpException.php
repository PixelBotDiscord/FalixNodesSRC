<?php

namespace Xsolla\SDK\Exception\Webhook;

class InvalidClientIpException extends ClientErrorException
{
    /**
     * @return string
     */
    public function getXsollaErrorCode()
    {
        return 'INVALID_CLIENT_IP';
    }

    /**
     * @return int
     */
    public function getHttpStatusCode()
    {
        return 401;
    }
}
