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
];
$params = array_merge(
        $params,
        require(__DIR__ . '/../../data/cache/cachedData.php')
);
return $params;
