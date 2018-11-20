<?php

namespace LordDashMe\WordpressScaffolding\Maintenance;

\define('MAINTENANCE_MODE', false);
\define('WHITELISTED_CLIENT_IP', '127.0.0.1|192.168.0.1');

if (! MAINTENANCE_MODE) {
    return;
}

function getClientIP()
{
    if (! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return \trim($_SERVER['HTTP_X_FORWARDED_FOR']);
    }
    
    return \trim($_SERVER['REMOTE_ADDR']);
}

function isMaintenanceMode()
{
    $whitelistedClientIP = \explode('|', WHITELISTED_CLIENT_IP);

    foreach ($whitelistedClientIP as $allowedClientIP) {
        $clientIp = \explode(',', \LordDashMe\WordpressScaffolding\Maintenance\getClientIP());
        if (\in_array($allowedClientIP, $clientIp)) {
            return false;
        }
    }

    return true;
}

if (\LordDashMe\WordpressScaffolding\Maintenance\isMaintenanceMode()) {
?>
<!DOCTYPE html>
<html>
<head>
<title>Site Maintenance</title>
<style>
body { text-align: center; padding: 150px; }
h1 { font-size: 50px; }
body { font: 20px Helvetica, sans-serif; color: #333; }
article { display: block; text-align: left; width: 650px; margin: 0 auto; }
a { color: #dc8100; text-decoration: none; }
a:hover { color: #333; text-decoration: none; }
</style>
</head>
<body>
<article>
    <h1>We&rsquo;ll be back soon!</h1>
    <div>
        <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href="mailto:#">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
        <p>&mdash; The Team</p>
    </div>
</article>
</body>
</html>
<?php exit; } ?>
