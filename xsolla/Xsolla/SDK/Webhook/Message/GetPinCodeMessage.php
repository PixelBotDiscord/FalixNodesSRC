<?php

namespace Xsolla\SDK\Webhook\Message;

class GetPinCodeMessage extends Message
{
    /**
     * @return string
     */
    public function getDigitalContent()
    {
        return $this->request['pin_code']['digital_content'];
    }

    /**
     * @return string
     */
    public function getDRM()
    {
        return $this->request['pin_code']['DRM'];
    }
}
