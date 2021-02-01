<?php

/*
Contoh Magic Constant
__LINE__
__FILE__
__DIR__
__FUNCTION__
__CLASS__
__TRAIT__
__METHOD__
__NAMESPACE__
*/

define("NAMA", "Muhammad Hildan");

echo NAMA;
echo "<hr>";


class Constant {
	public const OBJ = 1;

	public function konstanta() {
		return __NAMESPACE__;
	}
}

$coba = new Constant();
echo Constant::OBJ;
echo "<hr>";
echo $coba->konstanta();

?>