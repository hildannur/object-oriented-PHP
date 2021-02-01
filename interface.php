<?php


/**
 * 
 */

interface InfoProduk {
	public function getInfoProduk();
}

abstract class Produk {
	protected $judul,
	       	  $penulis,
	          $harga;

	public function __construct($judul = "judul", $penulis = "penulis", $harga = "harga") {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->harga = $harga;
	}

	abstract public function getInfo();
}

class Komik extends Produk implements InfoProduk {
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $harga = "harga", $jmlHalaman = 0) {

		parent::__construct($judul, $penulis, $harga);
			$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoProduk() {
		$str = "Komik : " . $this->getInfo() . " - " . $this->jmlHalaman . " halaman.";
		return $str;
	}

	public function getInfo() {
		$str = $this->judul . " | " . $this->penulis . " | " . "(Rp. $this->harga)";
		return $str;
	}
}

class Game extends Produk implements InfoProduk {
	public $wktMain;

	public function __construct($judul = "judul", $penulis = "penulis", $harga = "harga", $wktMain = 0) {

		parent::__construct($judul, $penulis, $harga);
			$this->wktMain = $wktMain;
	}
	public function getInfo() {
		$str = $this->judul . " | " . $this->penulis . " | " . "(Rp. $this->harga)";
		return $str;
	}

	public function getInfoProduk() {
		$str = "Game : " . $this->getInfo() . " ~ " . $this->wktMain . " jam.";
		return $str;
	}

	
}

class CetakInfoProduk {
	public $daftarProduk = [];

	public function tambahProduk(Produk $produk) {
		$this->daftarProduk[] = $produk;
	}

	public function cetak() {
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $p) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}

		return $str;
	}
}

$produk1 = new Game("Tekken 5", "Undertaker", 10000, 10);
$produk2 = new Komik("Atap Negeri", "Lord Fiersa", 120000, 100);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

?>