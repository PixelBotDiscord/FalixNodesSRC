<?php
error_reporting(0);
set_time_limit(0);

$base = dirname(dirname(__FILE__));
include($base . "/config.php");
include($base . "/global.php");

set_include_path(get_include_path() . PATH_SEPARATOR .  __DIR__ . DIRECTORY_SEPARATOR); // This is required for phpseclib ... please add all your other includes before this line!
include('Net/SSH2.php');

// cron_section:CheckUsersExpiry
$todays_date = new DateTime(date("Y-m-d")); // Y-m-d
$todays_date = strtotime($todays_date->format('Y-m-d'));
while(($row = $conn->query("SELECT * FROM users WHERE plan_expiry <= " . $todays_date . " AND plan_expiry != 0")->fetch_assoc()) != NULL) {
	$discord_id = $row['discord_id'];
	$conn->query("UPDATE users SET level=0 WHERE discord_id='" . mysqli_real_escape_string($conn, $discord_id) . "'");
	$conn->query("UPDATE users SET plan_expiry=0 WHERE discord_id='" . mysqli_real_escape_string($conn, $discord_id) . "'");
}
// cron_section:end()

// cron_section:Backup
$nodes = array(	
	1 => "217.160.40.90:root:MarioItzAwesome1337", //donator1
	2 => "217.160.59.122:root:Hb96xI45TR", //free1
	3 => "217.160.59.198:root:Ot0FQdNXUY", //free2
	4 => "217.160.43.100:root:Ri7KIGMb7V", //free3
	5 => "70.35.205.52:root:Ea71cZ1763", //donator2
	6 => "217.160.58.172:root:Pf6U52Khgv", //free4
	7 => "50.21.182.87:root:Bs609BEu8J", //free5
	8 => "70.35.199.124:root:Zo7abhR9uX", //free6
	11 => "74.208.137.213:root:Es7Ybrjg0i", //free8
	12 => "74.208.18.182:root:Or970uoEq3", //free9
	13 => "217.160.44.88:root:Bz51i8Q4n5" //free10
);
while(($row = $conn->query("SELECT * FROM backups WHERE status='queue'")->fetch_assoc()) != NULL) {
	$backupid = $row['backup_id'];		
	$ch = curl_init("https://" . $ptero_domain . "/api/application/servers/" . $row['server_id']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Authorization: Bearer " . $ptero_key,
		"Content-Type: application/json",
		"Accept: Application/vnd.pterodactyl.v1+json"
	));
	$result = curl_exec($ch);
	curl_close($ch);
	$uuid = json_decode($result, true)['attributes']['uuid'];
	$zipFilename = $uuid . "-" . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . ".zip";
	$node = json_decode($result, true)['attributes']['node'];
	$ssh_ip = explode(":", $nodes[$node])[0];	
	$ssh_user = explode(":", $nodes[$node])[1];	
	$ssh_pass = explode(":", $nodes[$node])[2];	
	$ssh = new Net_SSH2($ssh_ip);	
	$ssh->login($ssh_user, $ssh_pass);
	$ssh->setTimeout(0);
	$ssh->exec("zip -r " . $zipFilename . " /srv/daemon-data/" . $uuid);	
	$ssh->exec("curl -T " . $zipFilename . " ftp://backup1504.falixnodes.host/public_html/backup1504/ --user falixnodes:FNodes123@");	
	$ssh->exec("rm -rf " . $zipFilename);
	$conn->query("UPDATE backups SET status='done' WHERE backup_id='" . mysqli_real_escape_string($conn, $backupid) . "'");	
	$conn->query("UPDATE backups SET download_link='http://backup1504.falixnodes.host/" . $zipFilename . "' WHERE backup_id='" . mysqli_real_escape_string($conn, $backupid) . "'");
}
// cron_section:end()

// cron_section:Logger
file_put_contents($base . "/cron/log.txt", "Last execution: " . date('Y/m/d H:i:s'));
// cron_section:end()
?>