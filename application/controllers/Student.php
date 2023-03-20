<?php

class Student extends CI_Controller{

       

function index(){
    $this->load->model('Student_model');
    $students=$this->Student_model->all();
    $data=array();
    $data['students']=$students;
    $this->load->view('Student_list',$data);
}


function Edit($stuid){
    $this->load->model('Student_model');
    $students=$this->Student_model->getStudent($stuid);
    $data=array();
    $data['students']=$students;

    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('address','Address','required');
    $this->form_validation->set_rules('contact','Contact','required');
    $this->form_validation->set_rules('email','Email','required|valid_email');
    $this->form_validation->set_rules('course','Course','required');


    if($this->form_validation->run()==false){
        $this->load->view('Student_Edit',$data);


    }else{
        $Student=array();
        $Student['Name']=$this->input->post('name');
        $Student['Address']=$this->input->post('address');
        $Student['Contact']=$this->input->post('contact');
        $Student['Email']=$this->input->post('email');
        $Student['Course']=$this->input->post('course');

        $this->Student_model->UpdateStudent($stuid,$Student);
        $this->session->set_flashdata('Success',"Data Updated Successfully");
        redirect(base_url().'index.php/Student/index');





    }


}


function Delete(){

}

    function create(){
        $this->load->model('Student_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
       
    
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('contact','Contact','required');
        $this->form_validation->set_rules('course','Course','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if($this->form_validation->run()==false){

      
            $this->load->view('Student_create');

        
        }else{
            $Students=array();
            $Students['Name']=$this->input->post('name');
            $Students['Address']=$this->input->post('address');
            $Students['Contact']=$this->input->post('contact');
            $Students['Email']=$this->input->post('email');
            $Students['Course']=$this->input->post('course');

            $this->Student_model->create($Students);
            $this->session->set_flashdata('Success',"Data Inserted Successfully");
            redirect(base_url().'index.php/Student/index');





        }
        


        
    }

}


?>