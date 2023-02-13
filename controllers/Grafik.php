<?php

Class Grafik extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_grafik');
    }

    function data_data(){
        $data=$this->Model_grafik->data_list();
        echo json_encode($data);
    }
 
    function get_data(){
        $id=$this->input->get('id');
        $data=$this->Model_grafik->get_data_by_kode($id);
        echo json_encode($data);
    }
 
    function add(){
        $data1=$this->input->post('data1');
		$data2=$this->input->post('data2');
		$data3=$this->input->post('data3');
		$data=$this->Model_grafik->simpan_data($data1,$data2,$data3);
        echo json_encode($data);
		
    }
 
    function edit(){
        $data1=$this->input->post('data1');
		$data2=$this->input->post('data2');
		$data3=$this->input->post('data3');
        $id=$this->input->post('id');
        $data=$this->Model_grafik->update_data($data1,$data2,$data3,$id);
        echo json_encode($data);
		
    }
 
    function hapus(){
        $id=$this->input->post('id');
        $data=$this->Model_grafik->hapus_data($id);
        echo json_encode($data);
		
    }
 

    function index() {
		$this->template->load('template', 'grafik/list');
    }



	
}