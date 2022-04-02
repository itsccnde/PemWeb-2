<?php
require_once "class_nilai.php";
$mh1 = new nilaiMahasiswa("Jaringan Komputer", 80, "0821");

echo"<br/>Mata Kuliah : ".$mh1->matkul;
echo"<br/>Nilai : ".$mh1->nilai;
echo "<br/>NIM : ".$mh1->nim;
echo "<br/>Grade : ".$mh1->grade();
echo "<br/>Hasil Ujian : ".$mh1->hasil();
?>