<?php
require_once "class_mahasiswa.php";
$mh1 = new mahasiswa("02011", "Faiz Fikri","TI", 2012,  3.8);
$mh2 = new mahasiswa("02012", "Jamaludin","TI", 2012,  3.9);
$mh3 = new mahasiswa("01011", "Supriyadi", "SI", 2010,  3.46);
$mh4 = new mahasiswa("01012", "Juminten", "SI", 2010,  3.2);

echo"<br/>NIM : ".$mh1->nim;
echo"<br/>Nama : ".$mh1->nama;
echo "<br/> Prodi : ".$mh1->prod;
echo "<br/> Tahun Angkatan : ".$mh1->ta;
echo "<br/> IPK : ".$mh1->ipk;
echo "<br/> Predikat : ".$mh1->predikat_ipk (); 
?>