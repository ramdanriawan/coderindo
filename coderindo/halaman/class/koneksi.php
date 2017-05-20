<?php

class koneksi
{

	static function konek()
	{
		$dotenv = new Dotenv\Dotenv("$_SERVER[DOCUMENT_ROOT]");
		$dotenv->load();

		$dbhost = $_ENV["DB_HOST"];
		$dbname = $_ENV["DB_NAME"];
		$dbuser = $_ENV["DB_USER"];
		$dbpass = $_ENV["DB_PASS"];

		return new PDO("mysql:host=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
	}
}
