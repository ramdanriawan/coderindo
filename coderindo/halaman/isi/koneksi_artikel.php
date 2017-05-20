<?php 

$judul = str_replace("-", " ", $_GET["judul"]);
$tag = $_GET["tag"];

$konek = new PDO("mysql:host=localhost;dbname=coderindo", "root", "");
$query = $konek->query("select * from artikel where judul='$judul' AND tag='$tag'");
$row = $query->fetch(PDO::FETCH_OBJ);

?>