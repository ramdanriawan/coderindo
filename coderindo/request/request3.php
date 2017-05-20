<?php 

$admin = new admin();
$parse = new Parsedown();
$isi = $parse->text(
	$isi
	);

echo $admin->update($dibuat, $judul, $penul, $isi, $tag);

