<?php


/**
 * 
 */
class Produk {
	public $judul,
	       $penulis,
	       $harga;

	public function __construct($judul = "judul", $penulis = "penulis", $harga = "harga") {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->harga = $harga;
	}

	public function getInfo() {
		$str = "Judul :" . $this->judul . "|" . $this->penulis . "|" . "Rp. " . $this->harga;
		return $str;
	}
}

class Komik extends Produk {
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $harga = "harga", $jmlHalaman = 0) {

		parent::__construct($judul, $penulis, $harga);
			$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfo() {
		$str = parent::getInfo() . $this->jmlHalaman . " halaman";
		return $str;
	}
}

class Game extends Produk {
	public $wktMain;

	public function __construct($judul = "judul", $penulis = "penulis", $harga = "harga", $wktMain = 0) {

		parent::__construct($judul, $penulis, $harga);
			$this->wktMain = $wktMain;
	}

	public function getInfo() {
		$str = parent::getInfo() . " " . $this->wktMain . " jam";
		return $str;
	}
}

$produk1 = new Game("Tekken 5", "om", 10000, 10);
$produk2 = new Komik("Atap Negeri", "Lord Fiersa", 120000, 100);

echo $produk1->getInfo();
echo "<br>";
echo $produk2->getInfo();
?>