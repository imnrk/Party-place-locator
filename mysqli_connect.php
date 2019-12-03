<?php
# This is a php comment
if(!defined('DB_USER')) DEFINE ('DB_USER', 'root');
if(!defined('DB_PASSWORD')) DEFINE ('DB_PASSWORD', '');
if(!defined('DB_HOST')) DEFINE ('DB_HOST', 'localhost');
if(!defined('DB_NAME')) DEFINE ('DB_NAME', 'partyplaces');

$db = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('couldn\'t connect to mysqli: '+  mysqli_connect_error());

?>