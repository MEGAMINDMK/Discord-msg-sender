<title>news</title>
<form action="" method="get">
<input type="text" name="bot">
</form>
<?php
error_reporting(0);
//=======================================================================
// Create new webhook in your Discord channel settings and copy&paste URL
//=======================================================================
$webhookurl = "webhookofyourdiscordchannel";
//=======================================================================
// Compose message. You can use Markdown
//=======================================================================
//$msg = "Test **message** [https://krasin.in.ua](<URL>)";
$msg = $_GET['bot'];
$json_data = array ('content'=>"$msg");
$make_json = json_encode($json_data);
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
?>