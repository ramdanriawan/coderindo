<?php 
//include 'koneksi.php';

class paging
{
	public $query, $limit, $total;

	function page($sql)
	{
		$this->query = koneksi::konek()->query($sql);
		$this->total = $this->query->rowCount();

		return $this->total;
	}
}