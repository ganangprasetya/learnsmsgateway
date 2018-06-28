<?php

$post = [
    'messageid' => 'ITTEST0116',
    'userid' => 'TscSvKhGuEEI6yxpzl+Bjw==',
    'password'   => 'llEBYxeN30d0j/3+gl96dw==',
    'original'   => 'ZurichLife',
    'sendto'   => '6285213654343',
    'messagetype'   => 0,
    'message'   => 'Testing 6',
    'dept' => 'ITTEST'
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.zgatewaysms.com/HttpsZurich/receivePOST.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, 1);
// Edit: prior variable $postFields should be $postfields;
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // On dev server only!
$result = curl_exec($ch);

var_dump($result);

?>