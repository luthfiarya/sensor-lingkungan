<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('model_mahasiswa');
    }

	function index()
	{
	  $data['hasil']=$this->model_mahasiswa->Jum_mahasiswa_perjurusan();
	  $this->load->view('v_mahasiswa',$data);
	}
}
?>