<?php
require_once 'class_dispenser.php';
$leemineral = new Dispenser();
echo "Nama Minuman : ".$leemineral -> nama = 'Leemineral';
echo '</br>';
echo "Volume Botol Minuman : ".$leemineral -> isi(1000)." Ml";
echo '</br>';
echo "1 Gelas Seharga : ".$leemineral -> harseg('Rp.6000');
echo '</br>';
echo "Safitri Membeli 1 botol leemineral dengan Harga ".$leemineral -> harseg('Rp.6000')." dengan volume gelas sebesar ".$leemineral -> volgel(250)." Ml";
echo '</br>';
echo "Sisa Volume botol minuman Aqua gelas sebesar : ".$leemineral -> isi(1000) - $leemineral -> volgel(250). " Ml";
?>