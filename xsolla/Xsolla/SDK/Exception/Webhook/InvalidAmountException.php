<?php

namespace Xsolla\SDK\Exception\Webhook;

class InvalidAmountException extends ClientErrorException
{
    /**
     * @return string
     */
    public function getXsollaErrorCode()
    {
        return 'INCORRECT_AMOUNT';
    }

    /**
     * @return int
     */
    public function getHttpStatusCode()
    {
        return 422;
    }
}
