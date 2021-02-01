<?php

/**
 Inheritance Problem
 */
class Produk {
	public $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$wktMain;

	//constructor
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $wktMain = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->wktMain = $wktMain;

	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	// public function getInfoLengkap(){
	// 	return "Judul : $this->judul <br>
	// 		   Penulis : $this->penulis <br>
	// 	 	   Penerbit : $this->penerbit <br>
	// 		   Harga : $this->harga <br>
	// 	       Jumlah Halaman : $this->jmlHalaman <hr>

	// 	";
	// }
}

// class CetakInfoProduk {
// 	public function cetak(Produk $produk) {
// 		$str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga}) - {$produk->halaman}";
// 		return $str;
// 	}
// }

class Komik extends Produk {
	//public $jmlHalaman;

	// public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
	// 	$this->judul = $judul;
	// 	$this->penulis = $penulis;
	// 	$this->penerbit = $penerbit;
	// 	$this->harga = $harga;
	// 	$this->jmlHalaman = $jmlHalaman;

	public function getInfoLengkap(){
		return "Judul : $this->judul <br>
			   Penulis : $this->penulis <br>
		 	   Penerbit : $this->penerbit <br>
			   Harga : $this->harga <br>
		       Jumlah Halaman : $this->jmlHalaman <hr>
		";
	}

}

class Game extends Produk {
	//public $wktMain;

	// public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $wktMain = 0) {
	// 	$this->judul = $judul;
	// 	$this->penulis = $penulis;
	// 	$this->penerbit = $penerbit;
	// 	$this->harga = $harga;
	// 	$this->wktMain = $wktMain;
	// }
	public function getInfoLengkap(){
		return "Judul : $this->judul <br>
			   Penulis : $this->penulis <br>
		 	   Penerbit : $this->penerbit <br>
			   Harga : $this->harga <br>
		       Waktu Main : $this->wktMain <hr>
		";
	}

}

//instasiasi
$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, "100 halaman", 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 25000, 0, "50 jam");

echo $produk1->getInfoLengkap();
echo $produk2->getInfoLengkap();

?>