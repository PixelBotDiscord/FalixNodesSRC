<?php

namespace Xsolla\SDK\Exception\Webhook;

class InvalidUserException extends ClientErrorException
{
    /**
     * @return string
     */
    public function getXsollaErrorCode()
    {
        return 'INVALID_USER';
    }

    /**
     * @return int
     */
    public function getHttpStatusCode()
    {
        return 422;
    }
}
