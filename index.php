<?php 

session_start();

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');

require_once "./connect.php";
require_once "./Router/Router.php";


?>