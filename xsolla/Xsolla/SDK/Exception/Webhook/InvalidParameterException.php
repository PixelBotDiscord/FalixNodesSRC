<?php

namespace Xsolla\SDK\Exception\Webhook;

class InvalidParameterException extends ClientErrorException
{
    /**
     * @return string
     */
    public function getXsollaErrorCode()
    {
        return 'INVALID_PARAMETER';
    }

    /**
     * @return int
     */
    public function getHttpStatusCode()
    {
        return 422;
    }
}
