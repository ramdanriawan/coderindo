<?php

class artikel extends paging
{
	public $judul, $tag, $isi, $limit, $query, $mulai, $batas , $page, $row;

	function tampilkan($judul, $tag)
	{
		$this->judul = $judul;
		$this->tag = $tag;
		$this->sql = "select isi from artikel where judul like '$this->judul' and tag like '$this->tag' limit 1";

		$this->query = koneksi::konek()->query($this->sql);
		$this->isi = $this->query->fetch(PDO::FETCH_OBJ);

		return json_encode($this->isi);

	}

	function tampilkan_semua($mulai, $batas)
	{
		$this->sql = "select * from artikel limit $mulai,$batas";
		$this->query = koneksi::konek()->query($this->sql);

		while($this->isi = $this->query->fetch(PDO::FETCH_OBJ))
		{
			$this->row[] = $this->isi;
		}

		array_push( $this->row, ["total" => parent::page("select * from artikel")]) ;
		return json_encode($this->row);
	}

	function artikel_terpopuler($mulai, $batas)
	{
		$this->mulai = $mulai;
		$this->batas = $batas;
		$this->sql = "select * from artikel where dilihat > 10 ORDER BY dilihat limit $this->mulai,$this->batas";

		$this->query = koneksi::konek()->query($this->sql);

		while($this->isi = $this->query->fetch(PDO::FETCH_OBJ))
		{
			$this->row[] = $this->isi;
		}

		array_push( $this->row, ["total" => parent::page("select * from artikel where dilihat > 10")]);

		return json_encode($this->row);
	}

	function artikel_terbaru($mulai, $batas)
	{
		$this->sql = "select * from artikel order by id desc limit $mulai, $batas";

		$this->query = koneksi::konek()->query($this->sql);

		while($this->isi = $this->query->fetch(PDO::FETCH_OBJ))
		{
			$this->row[] = $this->isi;
		}

		array_push($this->row, ["total" => parent::page("select * from artikel order by id desc")]);

		return json_encode($this->row);
	}

	function related_post($tag)
	{
		$this->sql = "select * from artikel where tag='$tag' limit 5";
		$this->query = koneksi::konek()->query($this->sql);

		while($this->isi = $this->query->fetch(PDO::FETCH_OBJ))
		{
			$this->row[] = $this->isi;
		}

		array_push( $this->row, ["total" => parent::page("select * from artikel")]) ;
		return json_encode($this->row);
	}

}
