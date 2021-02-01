<?php


/**
 * 
 */
class Produk {
	private $judul,
	        $penulis,
			$diskon = 0,
			$harga;

	public function __construct($judul = "judul", $penulis = "penulis", $harga = "harga") {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->harga = $harga;
	}

	public function setDiskon($diskon) {
		$this->diskon = $diskon;
	}

	public function setJudul($judul) {
		if (!is_string($judul)) {
			throw new Exception("Judul Harus String", 1);
			}
		$this->judul = $judul;
	}

	public function getJudul() {
		return $this->judul;
	}

	public function setPenulis($penulis) {
		if (!is_string($penulis)) {
			throw new Exception("Penulis Harus String", 1);
			}
		$this->penulis = $penulis;
	}

	public function getPenulis() {
		return $this->penulis;
	}

	public function setHarga($harga) {
		if (!is_integer($harga)) {
			throw new Exception("Harga Harus Angka", 1);
			}
		$this->harga = $harga;
	}

	public function getHarga() {
		return $this->harga - ( $this->harga * $this->diskon / 100);
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
echo "<hr>";

//$produk1->setJudul("sbjbks");
$produk1->setDiskon(50);
echo $produk1->getJudul();


?>