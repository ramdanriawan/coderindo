<?php

class pencarian extends paging
{
  public $query, $isi, $keywo, $row, $sql, $total;

  public $statu = ["status" => "Pencarian Tidak Ditemukan"];

  function cari($keywo, $mulai, $batas)
  {
    $this->keywo = $keywo;
    $this->sql = "select * from artikel where judul like '%$this->keywo%' limit $mulai,$batas";
    $this->query = koneksi::konek()->query($this->sql);

    while($this->row = $this->query->fetch(PDO::FETCH_OBJ))
    {
      $this->isi[] = $this->row;
    }

    $this->total = paging::page("select * from artikel where judul like '%$this->keywo%'");
    $this->total = ["total" => $this->total];

    array_push($this->isi, $this->total);
    return json_encode($this->isi);
  }
}
