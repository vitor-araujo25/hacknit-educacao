<div class='margin container'>
    <div class='row'>
            <h1 class='titulo col s12'> SMS Enviado. </h1>
    </div>
</div>

<?php

$API_Key = "";

$ch = curl_init('https://textbelt.com/text');

$data = array(
  'phone' => '+5521995405544',
  'message' => $_GET["mensagem"],
  'key' => $API_Key,
);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

?>
