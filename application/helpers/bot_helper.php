<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

function sendTelegram($msg)
{
	// https://api.telegram.org/bot502761777:AAFGJgk6ADsq3GWaLJc-IJ_uBIR4Ivmh-KY/getUpdates
	$token_bot       = "50261777:AAFGJgk6ADsq3GWaLJc-IJ_uBIR4Ivmh-KY";
    $url = "https://api.telegram.org/bot502761777:AAFGJgk6ADsq3GWaLJc-IJ_uBIR4Ivmh-KY/sendMessage";
    $data = array(
        'chat_id' => '319560653',
        'text'  => $msg,
 
    );
    // use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ),
    );
    $context  = stream_context_create($options);
 
    $result = file_get_contents($url, false, $context);
}

function sendLine($msg)
{
	$data['text'] = $msg;
	$url = "https://aliansi78.herokuapp.com/index.php/push";
	$options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data),
        ),
    );
    $context  = stream_context_create($options);
 
    $result = file_get_contents($url, false, $context);
}