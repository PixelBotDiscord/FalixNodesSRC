<?php

namespace Xsolla\SDK\Webhook\Message;

class AfsRejectMessage extends Message
{

    /**
     * @return array
     */
    public function getTransaction()
    {
        return $this->request['transaction'];
    }

    /**
     * @return int
     */
    public function getPaymentId()
    {
        return $this->request['transaction']['id'];
    }

    /**
     * @return string|null
     */
    public function getExternalPaymentId()
    {
        if (array_key_exists('external_id', $this->request['transaction'])) {
            return $this->request['transaction']['external_id'];
        }
    }

    /**
     * @return int
     */
    public function getPaymentAgreement()
    {
        return $this->request['transaction']['agreement'];
    }

    /**
     * @return array
     */
    public function getRefundDetails()
    {
        return $this->request['refund_details'];
    }

}
