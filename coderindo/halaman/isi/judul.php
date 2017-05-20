<?php

function judul($url)
{
  if(strpos($_SERVER["REQUEST_URI"], $url) || $url == "/")
  {
    return true;
  }
  else
  {
    return false;
  }
}

if(judul("index/") || judul($_SERVER["REQUEST_URI"]))
{
  echo "home";
}
elseif(judul("artikel/"))
{
  $_GET["judul"] = str_replace("-", " ", $_GET["judul"]);
  echo "Belajar $_GET[tag] - $_GET[judul]";
}
elseif(judul("artikel_terpopuler"))
{
  echo "Index Artikel Terpopuler";
}
elseif(judul("cari/"))
{
  echo "Pencarian $_GET[keywo]";
}
elseif(judul("admin/index"))
{
  echo "Admin - Halaman Utama";
}
elseif(judul("admin/update"))
{
  echo "Admin - Update Artikel";
}
elseif(judul("admin/edit"))
{
  echo "Admin - Update Artikel";
}
