<?php

namespace Xsolla\SDK\Webhook\Message;

class PaymentMessage extends Message
{
    /**
     * @return array
     */
    public function getPurchase()
    {
        return $this->request['purchase'];
    }

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
     * @return array
     */
    public function getPaymentDetails()
    {
        return $this->request['payment_details'];
    }

    /**
     * @return array
     */
    public function getCustomParameters()
    {
        if (!array_key_exists('custom_parameters', $this->request)) {
            return [];
        }

        return $this->request['custom_parameters'];
    }

    /**
     * @return bool
     */
    public function isDryRun()
    {
        if (!array_key_exists('dry_run', $this->request['transaction'])) {
            return false;
        }

        return (bool) $this->request['transaction']['dry_run'];
    }
}
