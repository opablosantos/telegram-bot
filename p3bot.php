<?php

//Entre aspas deve ser colocado o token gerado para o seu bot
$token = "";

$user_id = $_GET['cont'];

$msg = $_GET['txt'];

$request_params = [
    'chat_id'=> $user_id,
    'text'=> $msg
];

$request_url = 'https://api.telegram.org/bot'. $token. '/sendMessage?'. http_build_query($request_params);

file_get_contents($request_url);
?>
<h1>Sua mensagem foi enviada com sucesso!</h1><br/>
<a href="index.php">Voltar</a>
