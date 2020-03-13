<?php

namespace Xsolla\SDK\Webhook;

use Xsolla\SDK\API\XsollaClient;

class User
{
    protected $id;
    protected $publicId;
    protected $name;
    protected $email;
    protected $phone;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getPublicId()
    {
        return $this->publicId;
    }

    public function setPublicId($publicId)
    {
        $this->publicId = $publicId;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    public function toJson()
    {
        $response = [];
        if ($this->id) {
            $response['id'] = $this->id;
        }
        if ($this->name) {
            $response['name'] = $this->name;
        }
        if ($this->publicId) {
            $response['public_id'] = $this->publicId;
        }
        if ($this->email) {
            $response['email'] = $this->email;
        }
        if ($this->phone) {
            $response['phone'] = $this->phone;
        }

        return XsollaClient::jsonEncode(['user' => $response]);
    }
}
