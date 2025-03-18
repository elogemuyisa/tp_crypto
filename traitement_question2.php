<?php
function aesEncrypt($data, $key, $mode) {
    $cipher = "aes-256-$mode";
    $iv_length = openssl_cipher_iv_length($cipher);
    $iv = $iv_length ? openssl_random_pseudo_bytes($iv_length) : "";
    $encrypted = openssl_encrypt($data, $cipher, $key, 0, $iv);
    return base64_encode($iv . $encrypted);
}

function aesDecrypt($data, $key, $mode) {
    $cipher = "aes-256-$mode";
    $data = base64_decode($data);
    $iv_length = openssl_cipher_iv_length($cipher);
    $iv = $iv_length ? substr($data, 0, $iv_length) : "";
    $encrypted = $iv_length ? substr($data, $iv_length) : $data;
    return openssl_decrypt($encrypted, $cipher, $key, 0, $iv);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $operation = $_POST['operation'];
    $mode = $_POST['mode'];
    $key = $_POST['key'];
    $text = $_POST['text'];

    if ($operation === 'encrypt') {
        $resultText = aesEncrypt($text, $key, $mode);
    } else {
        $resultText = aesDecrypt($text, $key, $mode);
    }

    $result = [
        'operation' => $operation,
        'mode' => $mode,
        'text' => $resultText
    ];

    header('Location: question2.php?result=' . urlencode(json_encode($result)));
    exit();
}
?>