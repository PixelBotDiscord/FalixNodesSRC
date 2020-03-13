<?php

namespace Xsolla\SDK\Webhook\Message;

class UserSearchMessage extends Message
{
    /**
     * @return string|null
     */
    public function getUserPublicId()
    {
        if (array_key_exists('public_id', $this->request['user'])) {
            return $this->request['user']['public_id'];
        }
    }

    /**
     * @return string|null
     */
    public function getUserId()
    {
        if (array_key_exists('id', $this->request['user'])) {
            return $this->request['user']['id'];
        }
    }
}
