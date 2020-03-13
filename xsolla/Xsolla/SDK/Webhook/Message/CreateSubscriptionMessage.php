<?php

namespace Xsolla\SDK\Webhook\Message;

class CreateSubscriptionMessage extends CancelSubscriptionMessage
{
    /**
     * @return array
     */
    public function getSubscription()
    {
        return $this->request['subscription'];
    }

    /**
     * @return array
     */
    public function getCoupon()
    {
        if (!array_key_exists('coupon', $this->request)) {
            return [];
        }

        return $this->request['coupon'];
    }
}
