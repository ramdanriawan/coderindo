<?php
error_reporting(0);

include "../autoload/autoload.php";

$reque = $_GET["reque"];
$page = $_GET["page"];

$reque_admin = $_POST["reque_admin"];

$reque_pencarian = ["cari"];
$reque_artikel = ["tampilkan", "tampilkan_semua", "artikel_terpopuler", "artikel_terbaru", "related_post"];
$reque_admin_data = ["update", "edit", "profile"];
$reque_upload = ["gambar"];

if(in_array($reque, $reque_artikel))
{
	$judul = $_GET["judul"];
	$tag = $_GET["tag"];


	$mulai = ($page * 2) - 1;
	$batas =  2;

	if ($reque == "artikel_terpopuler")
	{
		$mulai = 1;
		$batas = 5;
	}

	include 'request1.php';
}

elseif (in_array($reque_admin, $reque_admin_data)) {
	$dibuat = time();
	$judul = $_POST["judul"];
	$penul = $_POST["penul"];
	$isi = $_POST["isi"];
	$tag = $_POST["tag"];

	include "request3.php";
}
elseif(in_array($reque, $reque_pencarian))
{
	$keywo = $_GET["keywo"];
	$mulai = ($page * 2) - 1;
	$batas =  2;

	include "request2.php";
}
elseif(in_array($reque, $reque_upload))
{
	include "request5.php";
}
