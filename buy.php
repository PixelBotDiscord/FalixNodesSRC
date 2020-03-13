<?php

session_start();

include("global.php");

include("config.php");

if( checklogin() == true ) {

	$user = $_SESSION['discord_user'];

	$pterodactyl_panelinfo = $conn->query("SELECT * FROM users WHERE discord_id='" . mysqli_real_escape_string($conn, $user->id) . "'")->fetch_assoc();

	$pterodactyl_username = $pterodactyl_panelinfo['pterodactyl_username'];

	$pterodactyl_password = $pterodactyl_panelinfo['pterodactyl_password'];

} else {

	header("Location: /");

	die();

}

include("plans.php");



if( !isset($_GET['level']) ) {

	die("ERROR: `level` is required.");

}

if( !isset($_GET['method']) || empty($_GET['method']) || !in_array($_GET['method'], array("xsolla", "paypal")) ) {
	die("ERROR: invalid method.");
}



// Check if the specificied level exists

$checkLevel = $conn->query("SELECT * FROM levels WHERE level=" . mysqli_real_escape_string($conn, $_GET['level']))->num_rows;

if( $checkLevel == 0 ) {

	die("ERROR: invalid level.");

}



// Check if user have current level or higher

if( $GET_USER_LEVEL >= intval($_GET['level']) ) {

	ShowError("You already have this plan or a higher one.");

}



// Get level info

$level_info = $conn->query("SELECT * FROM levels WHERE level=" . mysqli_real_escape_string($conn, $_GET['level']))->fetch_assoc();

if( $level_info['price'] == 0 ) {
	ShowError("You can't buy a free plan.");
}


// Create payment handler

$pHandler['id'] = substr(md5(mt_rand()), 0, 7);

$pHandler['parameters'] = mysqli_real_escape_string($conn, $user->id) . ":" . mysqli_real_escape_string($conn, $_GET['level']); // discordid:level

$conn->query("INSERT INTO payment_handlers (id, parameters) VALUES ('" . $pHandler['id'] . "', '" . $pHandler['parameters'] . "')");

if( $_GET['method'] == "xsolla" ) {
	if( intval($_GET['level']) !== 13 ) {
		ShowError("Sorry, Xsolla is available for the 40EUR plan only.");
	}
	$MerchantId = "51721"; // string value
	$ApiKey = "fc145acdffdf5b0f56d9da87d5b3c986"; // string value
	$ProjectId = 45183; // int value
	// Create user (dont touch this)
	$userid = "u" . strval( mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) );
	$uemail = "u" . strval( mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) ) . "@nomail.com";
	$ch = curl_init("https://api.xsolla.com/merchant/v2/projects/" . $ProjectId . "/users");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array("user_id" => $userid, "user_name" => $userid, "email" => $uemail)));
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"content-type: application/json",
		"authorization: Basic " . base64_encode($MerchantId . ":" . $ApiKey)
	));
	$result = curl_exec($ch);
	curl_close($ch);
	// ---------------------------------
	$ch = curl_init("https://api.xsolla.com/merchant/v2/merchants/" . $MerchantId . "/token");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
		"user" => array(
			"id" => array("value" => $userid), //dont touch this
			"email" => array("value" => $user->email)
		),
		"settings" => array(
			"project_id" => $ProjectId, //dont touch this
			"return_url" => "https://falixnodes.host", //set this to your return URL
			"external_id" => strval($pHandler['id'])
		),
		"purchase" => array(
			"checkout" => array(
				// change the amount and the currency if needed
				"amount" => intval($level_info['price']),
				"currency" => "EUR"
			)
		)
	)));
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"content-type: application/json",
		"Accept: application/json",
		"authorization: Basic " . base64_encode($MerchantId . ":" . $ApiKey)
	));
	$result = curl_exec($ch);
	curl_close($ch);
	$token = json_decode($result, true)['token'];

	header("Location: https://secure.xsolla.com/paystation2/?access_token=" . $token);
	die();
}

if( $_GET['method'] == "paypal" ) {
	echo '

	<noscript>

	JavaScript is required.

	</noscript>



	<script>

	window.onload = function(){

	  document.forms[\'buyform\'].submit();

	}

	</script>



	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="buyform" id="buyform">

		<input type="hidden" name="cmd" value="_xclick">

		<input type="hidden" name="notify_url" value="http://falixnodes.host/ipn/paypal.php">

		<input type="hidden" name="business" value="' . $paypal['email'] . '">

		<input type="hidden" name="item_name" value="FalixNodes">

		<input type="hidden" name="amount" value="' . $level_info['price'] . '">

		<input type="hidden" name="currency_code" value="EUR">

		<input type="hidden" name="custom" value="' . $pHandler['id'] . '">

	</form>

	';
}
?>