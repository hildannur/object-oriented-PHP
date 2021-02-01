<?php 

/**
 * 
 */
class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

	function __construct($judul = "judul",$penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	function getLabel() {
		return  "Judul buku = $this->judul <br>
				Penulis = $this->penulis <br>
				Penerbit = $this->penerbit <br>
				Harga = $this->harga <hr>";
	}
}

$produk1 = new Produk("Atap Negeri", "Fiersa Besari", "Fiersa Besari", 10000);
$produk2 = new Produk("Habis Gelap Terbitlah Terang", "RA Kartini", "RA Kartini", 20000);

echo $produk1->getLabel();
echo $produk2->getLabel();

?>