<?php

class upload_foto
{

  public $query, $row, $data, $koneksi;

  function tampilkan_semua()
  {
    $this->koneksi = new PDO("mysql:host=localhost;dbname=coderindo", "root", "");
    $this->query = $this->koneksi->query("select * from upload_foto");

    while($this->row = $this->query->fetch(PDO::FETCH_OBJ))
    {
      $this->data[] = $this->row;
    }

    return json_encode($this->data);
  }
}
