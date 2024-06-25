<?php 
Class Jobservice extends CI_Model{

    function getall(){
        $this->db->select('*');
        $this->db->from('job');
        $query = $this->db->get();
        return $query->result();

    }

    function savedetails($jobmodel){
        $data = array(
            'job_title' => $jobmodel->getJobTitle(),
            'job_desc' => $jobmodel->getJobDesc(),
            'job_location' => $jobmodel->getJobLocation(),
            'job_type' => $jobmodel->getJobType()
        );
        $this->db->insert('job',$data);
    }

    function getjob($id){
        $this->db->select('*');
        $this->db->from('job');
        $this->db->where('jobid',$id);
        $query = $this->db->get();
        return $query->result();
    }

    function updatejob($jobmodel){
        $data = array(
            'jobid'=>$jobmodel->getJobId(),
            'job_title' => $jobmodel->getJobTitle(),
            'job_desc' => $jobmodel->getJobDesc(),
            'job_location' => $jobmodel->getJobLocation(),
            'job_type' => $jobmodel->getJobType()
        );
        $this->db->where('jobid',$jobmodel->getJobId());
        $this->db->update('job',$data);
    }

    function deletejob($id){
        $this->db->where('jobid',$id);
        $this->db->delete('job');
    }
    
}


?>