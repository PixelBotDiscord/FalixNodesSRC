<?php

namespace Xsolla\SDK\Webhook\Message;

class CancelSubscriptionMessage extends Message
{
    /**
     * @return array
     */
    public function getSubscription()
    {
        return $this->request['subscription'];
    }
}
