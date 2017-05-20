<?php
$foto = new upload_foto();

if($reque == "gambar")
{
  echo $foto->tampilkan_semua();
}
