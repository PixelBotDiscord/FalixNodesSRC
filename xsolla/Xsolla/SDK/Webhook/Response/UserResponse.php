<?php

namespace Xsolla\SDK\Webhook\Response;

use Xsolla\SDK\Webhook\User;
use Xsolla\SDK\Webhook\WebhookResponse;

class UserResponse extends WebhookResponse
{
    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->validateStringParameter('User id', $user->getId());
        parent::__construct(200, $user->toJson());
    }
}
