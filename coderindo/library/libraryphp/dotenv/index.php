<?php 

require_once "vendor/autoload.php";

$doten = new Dotenv\Dotenv(__DIR__);

$doten->load();
$server2 = $_ENV["USERNAME"];

echo $server2;\

function user()
{
	echo "hallo saya adalah method pertama";
}