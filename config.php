<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";
$conn = new mysqli($servername, $username, $password, $dbname);

// Pterodactyl API settings
$ptero_domain = "";
$ptero_key = "";

// Payment settings
$paypal['email'] = "";

// Discord server settings
$discord['autojoin_role'] = ""; //role ID
$discord['autojoin_guildid'] = ""; //server ID
$discord['bot_token'] = "";
?>