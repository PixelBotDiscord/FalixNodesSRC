<?php

namespace Xsolla\SDK\Exception\Webhook;

class InvalidSignatureException extends ClientErrorException
{
    /**
     * @return string
     */
    public function getXsollaErrorCode()
    {
        return 'INVALID_SIGNATURE';
    }

    /**
     * @return int
     */
    public function getHttpStatusCode()
    {
        return 401;
    }
}
