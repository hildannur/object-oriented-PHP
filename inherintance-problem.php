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
			$wktMain,
			$tipe;

	//constructor
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $wktMain = 0, $tipe = "tipe") {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->wktMain = $wktMain;
		$this->tipe = $tipe;

	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap(){
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if ($this->tipe == "Komik") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		} else if ($this->tipe == "Game") {
			$str .= " ~ {$this->wktMain} Jam.";
		}
		return $str;
	}
}

class CetakInfoProduk {
	public function cetak(Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga}) - {$produk->halaman}";
		return $str;
	}
}

//instasiasi
$produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, "100 halaman", 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 25000, 0, 50, "Game");

echo $produk2->getInfoLengkap();

//  class Mobil {
//  	public $nama,
//  		   $merk,
//  		   $warna,
//  		   $kecepatanMaks,
//  		   $jumlahSeats;
// 	public function __construct($nama = "nama", $merk = "merk", $warna = "warna", $kecepatanMaks = "kecepatan maksimal", $jumlahSeats = "jumlah penumpang") {
// 		$this->nama = $nama;
// 		$this->merk = $merk;
// 		$this->warna = $warna;
// 		$this->kecepatanMaks = $kecepatanMaks;
// 		$this->jumlahSeats = $jumlahSeats;
//  	}

//  	public function getLabel() {
//  		return "Nama = $this->nama <br>
//  				Merk = $this->merk <br>
//  				Warna = $this->warna <br>
//  				Kecepatan Maksimal = $this->kecepatanMaks Km/H <br>
//  				Jumlah Penumpang = $this->jumlahSeats <hr>";
//  	}

//  	public function tambahKecepatan() {
//  	}

//  	public function kurangiKecepatan() {
//  	}

//  	public function gantiTransmisi(){
//  	}

//  	public function belokKiri() {
//  	}

//  	public function belokKanan() {
//  	}

 	
//  }

//  class MobilSport extends Mobil {
//  	public $turbo;

//  	public function __construct($nama = "nama", $merk = "merk", $warna = "warna", $kecepatanMaks = "kecepatan maksimal", $jumlahSeats = "jumlah penumpang", $turbo) {
//  		$this->nama = $nama;
// 		$this->merk = $merk;
// 		$this->warna = $warna;
// 		$this->kecepatanMaks = $kecepatanMaks;
// 		$this->jumlahSeats = $jumlahSeats;
// 		$this->turbo = $turbo;
//  	}

//  	public function getLabel() {
//  		return "Nama = $this->nama <br>
//  				Merk = $this->merk <br>
//  				Warna = $this->warna <br>
//  				Kecepatan Maksimal = $this->kecepatanMaks Km/H <br>
//  				Jumlah Penumpang = $this->jumlahSeats <br>
//  				Turbo = $this->turbo <hr>";
//  	}

//  	public function jalankanTurbo() {}
//  }

// $mobil1 = new MobilSport("BRZ", "Subaru", "Putih", "220", "2", "true");
// $mobil2 = new Mobil("Laurel", "Nissan", "Hitam", "200", "4");

// echo $mobil1->getLabel();
// echo $mobil2->getLabel();


?>