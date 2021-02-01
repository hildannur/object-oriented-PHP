<?php

class ContohStatic {
	public static $angka = 1;

	public function halo() {
		return "Halo " . self::$angka++ . " kali <br>";
	}
}

$mhs1 = new ContohStatic();
echo $mhs1->halo();
echo $mhs1->halo();
echo $mhs1->halo();
echo $mhs1->halo();

?>