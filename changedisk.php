<?php

session_start();

include("global.php");

include("config.php");

include("plans.php");

if( checklogin() == true ) {

	$user = $_SESSION['discord_user'];

} else {

	notloggedin("You must be logged in.");

}



if( !isset($_GET['id']) || empty($_GET['id']) || !isset($_GET['newdisk']) || empty($_GET['newdisk']) ) {

	header("Location: /");

	die();

}



if(is_numeric($_GET['newdisk']) && $_GET['newdisk'] > 0 && $_GET['newdisk'] == round($_GET['newdisk'], 0)){

	//pass

} else {

	ShowError("Disk must be a number.");

}



// Check if user have permissions for the server ID, and if the server exists

$checkperms = $conn->query("SELECT * FROM servers WHERE owner_id='" . mysqli_real_escape_string($conn, $user->id) . "' AND pterodactyl_serverid=" . mysqli_real_escape_string($conn, $_GET['id']));

if( $checkperms->num_rows == 0 ) {

	ShowError("You don't have permissions to control this server or this server doesn't exists.");

}



//Check if user exceeded his disk per server

if( intval($_GET['newdisk']) > ($maxdisk + $user_extra_disk) ) {

	ShowError("Sorry, your max disk space per server is " . ($maxdisk + $user_extra_disk) . " MB");

}



// Get some server information, those are needed to update disk

$ch = curl_init("https://" . $ptero_domain . "/api/application/servers/" . $_GET['id']);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(

	"Authorization: Bearer " . $ptero_key,

	"Content-Type: application/json",

	"Accept: Application/vnd.pterodactyl.v1+json"

));

$result = curl_exec($ch);

curl_close($ch);

$ServerAllocation = json_decode($result, true)['attributes']['allocation'];

$x_ServerCpu = json_decode($result, true)['attributes']['limits']['cpu'];

$x_ServerMemory = json_decode($result, true)['attributes']['limits']['memory'];

$x_ServerIO = json_decode($result, true)['attributes']['limits']['io'];

$x_ServerDbs = json_decode($result, true)['attributes']['feature_limits']['databases'];

$x_ServerAllocations = json_decode($result, true)['attributes']['feature_limits']['allocations'];



// Update server disk now

$ch = curl_init("https://" . $ptero_domain . "/api/application/servers/" . $_GET['id'] . "/build");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(

	"allocation" => $ServerAllocation,

	"memory" => $x_ServerMemory,

	"swap" => 0,

	"disk" => intval($_GET['newdisk']),

	"io" => $x_ServerIO,

	"cpu" => $x_ServerCpu,

	"feature_limits" => array(

		"databases" => $x_ServerDbs,

		"allocations" => $x_ServerAllocations

	)

)));

curl_setopt($ch, CURLOPT_HTTPHEADER, array(

	"Authorization: Bearer " . $ptero_key,

	"Content-Type: application/json",

	"Accept: Application/vnd.pterodactyl.v1+json"

));

$result = curl_exec($ch);

curl_close($ch);



// Redirect user to homepage with success message

ShowSuccess("Changed disk space!");

?>