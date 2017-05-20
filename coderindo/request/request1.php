<?php

$artikel = new artikel();

if($reque == "tampilkan")
{
	echo $artikel->tampilkan($judul, $tag);
}
elseif($reque == "tampilkan_semua")
{
	echo $artikel->tampilkan_semua($mulai, $batas);
}
elseif($reque == "artikel_terpopuler")
{
	echo $artikel->artikel_terpopuler($mulai, $batas);
}
elseif($reque == "artikel_terbaru")
{
	echo $artikel->artikel_terbaru($mulai, $batas);
}
elseif($reque == "related_post")
{
	echo $artikel->related_post($tag);
}