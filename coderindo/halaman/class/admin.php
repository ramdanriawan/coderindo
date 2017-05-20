<?php

class admin
{
	public $query, $sql, $data, $status;

	function __construct()
	{
		date_default_timezone_set("asia/jakarta");
	}

	function update($dibuat, $judul, $penul, $isi, $tag )
	{

		$this->data = [
				"dibuat" => $dibuat,
				"judul" => $judul,
				"penulis" => $penul,
				"isi" => $isi,
				"tag" => $tag
			           ];

		$this->query = koneksi::konek()->prepare("insert into artikel(dibuat, judul, penulis, isi, tag) values(:dibuat, :judul,:penulis,:isi,:tag)");

		if($this->query->execute($this->data))
		{
			$statu = ["status" => "Berhasil Menambah Artikel"];
			return  json_encode($statu);
		}
		else
		{
			$statu = ["status" => "Gagal Menambah Artikel"];
			return json_encode($statu);
		}


	}
}
