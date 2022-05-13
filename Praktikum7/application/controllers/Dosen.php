<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dosen extends CI_Controller {
    public function index() {
        $this->load->model('Dosen_model','dsn1');
        $this->dsn1->nidn='100120334';
        $this->dsn1->pendidikan='S1 Teknik Industri';

        $this->load->model('Dosen_model','dsn2');
        $this->dsn2->nidn='100130445';
        $this->dsn2->pendidikan='S1 Psikolog';

        $this->load->model('Dosen_model','dsn3');
        $this->dsn3->nidn='100140556';
        $this->dsn3->pendidikan='S1 Keperawatan';


        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn']=$list_dsn;
        
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('layouts/footer');
    } 
}
?>