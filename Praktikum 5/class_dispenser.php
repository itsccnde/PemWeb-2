<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function isi($vol){
        return $this->volume = $vol;
    }
    public function harseg($hg){
        return $this->harga_segelas = $hg;
    }
    public function volgel($vg){
        return $this->volume_gelas = $vg;
    }
    public function namMin($nM){
        return $this->nama_minuman = $nM;
    }
}
?>