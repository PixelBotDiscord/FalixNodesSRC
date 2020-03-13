<?php

namespace Xsolla\SDK\API\PaymentUI;

/**
 * @see https://github.com/xsolla/paystation-embed
 */
class PaymentUIScriptRenderer
{
    /**
     * @param string     $token
     * @param bool|false $isSandbox
     */
    public static function send($token, $isSandbox = false)
    {
        echo self::render($token, $isSandbox);
    }

    /**
     * @param  string     $token
     * @param  bool|false $isSandbox
     * @return string
     */
    public static function render($token, $isSandbox = false)
    {
        $template =
<<<'EOF'
<script>
    var options = {
        access_token: '%s',
        sandbox: %s
    };
    var s = document.createElement('script');
    s.type = "text/javascript";
    s.async = true;
    s.src = "//static.xsolla.com/embed/paystation/1.0.7/widget.min.js";
    s.addEventListener('load', function (e) {
        XPayStationWidget.init(options);
    }, false);
    var head = document.getElementsByTagName('head')[0];
    head.appendChild(s);
</script>
EOF;

        return sprintf($template, $token, $isSandbox ? 'true' : 'false');
    }
}
