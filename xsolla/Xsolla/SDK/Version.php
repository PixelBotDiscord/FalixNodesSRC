<?php

namespace Xsolla\SDK;

use Xsolla\SDK\Exception\XsollaException;

class Version
{
    const VERSION = 'v4.0.2';

    /**
     * @throws XsollaException
     * @return string
     */
    public static function getVersion()
    {
        if (!extension_loaded('curl')) {
            throw new XsollaException('The PHP cURL extension must be installed to use Xsolla SDK for PHP.');
        }

        $curlVersion = curl_version();

        return sprintf('xsolla-sdk-php/%s curl/%s PHP/%s', self::VERSION, $curlVersion['version'], PHP_VERSION);
    }
}
