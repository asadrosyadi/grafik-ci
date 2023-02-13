<?php

class Model_grafik extends CI_Model {
      

	function save() {
        $data = array(
          "data1" => $this->input->post('data1'),  
		"data2" => $this->input->post('data2'),  
		"data3" => $this->input->post('data3'),  
        );
        $this->db->insert('data',$data);
	}


  function data_list(){
        $hasil=$this->db->query("SELECT * FROM fuzzy ORDER BY id DESC LIMIT 10");
        return $hasil->result();
    }
 
    function simpan_data($data1,$data2,$data3){
        $hasil=$this->db->query("INSERT INTO data (data1,data2,data3)VALUES('$data1','$data2','$data3')");
        return $hasil;
    }
 
    function get_data_by_kode($id){
        $hsl=$this->db->query("SELECT * FROM data WHERE id='$id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'data1' => $data->data1,
                    'data2' => $data->data2,
					'data3' => $data->data3,
					'id' => $data->id,
                    );
            }
        }
        return $hasil;
    }
 
    function update_data($data1,$data2,$data3,$id){
        $hasil=$this->db->query("UPDATE data SET data1='$data1',data2='$data2',data3='$data3' WHERE id='$id'");
        return $hasil;
    }
 
    function hapus_data($id){
        $hasil=$this->db->query("DELETE FROM data WHERE id='$id'");
        return $hasil;
    }

}