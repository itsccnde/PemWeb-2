<?php
require_once "class_persegipanjang.php";
$pp1 = new persegiPanjang(5, 5);
$pp2 = new persegiPanjang(2, 2 );

echo"<br/>Luas Lingkaran I ".$pp1->getLuas();
echo"<br/>Luas Lingkaran II ".$pp2->getLuas();
echo "<br/>Keliling Lingkaran I ".$pp1->getKeliling();
echo "<br/>Keliling Lingkaran II ".$pp2->getKeliling();
?>