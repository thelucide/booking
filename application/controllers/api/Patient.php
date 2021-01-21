<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		$this->load->model('Patient_model');
	}


	
	
	public function patient_details(){
		
		$data = $this->Patient_model->patient_details();
		
		if($data){
		    $data1[]=$data;
		    $json[]=array('api_status'=>'1','patient_data'=>$data1);
		}
		else{
		    $json[]=array('api_status'=>'0');
		}
		echo json_encode($json);
		
	}
	
}
