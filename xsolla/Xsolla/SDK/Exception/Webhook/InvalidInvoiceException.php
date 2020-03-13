<?php

namespace Xsolla\SDK\Exception\Webhook;

class InvalidInvoiceException extends ClientErrorException
{
    /**
     * @return string
     */
    public function getXsollaErrorCode()
    {
        return 'INCORRECT_INVOICE';
    }

    /**
     * @return int
     */
    public function getHttpStatusCode()
    {
        return 422;
    }
}
