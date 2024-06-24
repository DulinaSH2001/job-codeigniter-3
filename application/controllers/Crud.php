<?php
 Class Crud extends CI_Controller{



function index (){

    $this->load->view('viewall');
}

function create (){
    $this->load->view('createjob');
}

function edit(){
    $this->load->view('editjob');


}

function delete(){
  
    
}

    

 }