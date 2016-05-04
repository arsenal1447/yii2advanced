<?php
// return [
//     'adminEmail' => 'admin@example.com',
//     //'supportEmail' => 'support@example.com',
//     'supportEmail' => 'zxx1988328@163.com',
//     'user.passwordResetTokenExpire' => 3600,
// ];


$params = [
    'adminEmail' => 'admin@example.com',
    //'supportEmail' => 'support@example.com',
    'supportEmail' => 'zxx1988328@163.com',
    'user.passwordResetTokenExpire' => 3600,
    'icon-framework' => 'fa',  // Font Awesome Icon framework
    'avatarPath' => '/web/uploads/avatars/',
    'avatarUrl' => '/uploads/avatars/',
    'avatarCachePath' => '/web/uploads/avatars/cache/',
    'avatarCacheUrl' => '/uploads/avatars/cache/',
    'icon-framework' => 'fa',  // Font Awesome Icon framework
    'qrCodePath' => '/web/uploads/qr-code/',
    'qrCodeUrl' => '/uploads/qr-code/',
];
$params = array_merge(
        $params,
        require(__DIR__ . '/../../data/cache/cachedData.php')
);
return $params;
