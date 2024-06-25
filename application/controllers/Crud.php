<?php
 Class Crud extends CI_Controller{

    function __construct(){
        parent::__construct();

        
        $this->load->model('Jobmodel');
        $this->load->model('Jobservice');
    }   



function index (){
    $jobservice = new Jobservice();
    $data['jobs'] = $jobservice->getall();
    $this->load->view('viewall',$data);
}

function create (){
    $this->load->view('createjob');
}
 
function save(){
    $jobmodel = new Jobmodel();
    $jobservice = new Jobservice();
    $jobmodel->setJobTitle($this->input->post('title'));
    $jobmodel->setJobDesc($this->input->post('desc'));
    $jobmodel->setJobLocation($this->input->post('location'));
    $jobmodel->setJobType($this->input->post('jobtype'));

    $jobservice->savedetails($jobmodel);
    $this->index();  
}

   


function edit($id){
    $jobservice = new Jobservice();
    $data['job'] = $jobservice->getjob($id);
    $this->load->view('editjob',$data);
}

 function updatedata(){
    $jobmodel = new Jobmodel();
    $jobservice = new Jobservice();
    $jobmodel->setJobid($this->input->post('id'));
    $jobmodel->setJobTitle($this->input->post('title'));
    $jobmodel->setJobDesc($this->input->post('desc'));
    $jobmodel->setJobLocation($this->input->post('location'));
    $jobmodel->setJobType($this->input->post('jobtype'));
    $jobservice->updatejob($jobmodel);
    $this->index();  

 }

function delete($id){
    $jobservice = new Jobservice();
    $jobservice->deletejob($id);

    $this->index(); 

  
    
}

    
 }
 
 ?>