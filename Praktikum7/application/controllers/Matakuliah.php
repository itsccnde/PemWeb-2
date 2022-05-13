<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Matakuliah extends CI_Controller {
    public function index() {
        $this->load->model('Matakuliah_model','matkul1');
        $this->matkul1->nama='Bahasa indonesia';
        $this->matkul1->sks='4';
        $this->matkul1->kode='1002';


        $this->load->model('Matakuliah_model','matkul2');
        $this->matkul2->nama='Basis Data';
        $this->matkul2->sks='4';
        $this->matkul2->kode='1003';

        $this->load->model('Matakuliah_model','matkul3');
        $this->matkul3->nama='Matematika';
        $this->matkul3->sks='4';
        $this->matkul3->kode='1004';


        $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3];
        $data['list_matkul']=$list_matkul;
        
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('layouts/footer');
    } 
}
?>