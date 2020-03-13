<?php

namespace Xsolla\SDK\Webhook\Response;

use Xsolla\SDK\API\XsollaClient;
use Xsolla\SDK\Webhook\WebhookResponse;

class PinCodeResponse extends WebhookResponse
{
    /**
     * @param string $pinCode
     */
    public function __construct($pinCode)
    {
        $this->validateStringParameter('Pin code', $pinCode);
        parent::__construct(200, XsollaClient::jsonEncode(['pin_code' => $pinCode]));
    }
}
