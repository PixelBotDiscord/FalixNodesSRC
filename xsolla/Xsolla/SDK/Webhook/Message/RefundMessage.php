<?php

namespace Xsolla\SDK\Webhook\Message;

class RefundMessage extends PaymentMessage
{
    /**
     * @return array
     */
    public function getRefundDetails()
    {
        return $this->request['refund_details'];
    }
}
