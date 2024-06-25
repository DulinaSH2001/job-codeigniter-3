<?php 

Class Jobmodel extends CI_Model{
    var $jobid;
     var $job_title;
     var $job_desc;
     var $job_location;
     var $job_type;
     
    public function getJobid()
    {
        return $this->jobid;
    }

    public function setJobid($jobid)
    {
        $this->jobid = $jobid;
    }

    public function getJobTitle()
    {
        return $this->job_title;
    }

    public function setJobTitle($job_title)
    {
        $this->job_title = $job_title;
    }

    public function getJobDesc()
    {
        return $this->job_desc;
    }

    public function setJobDesc($job_desc)
    {
        $this->job_desc = $job_desc;
    }

    public function getJobLocation()
    {
        return $this->job_location;
    }

    public function setJobLocation($job_location)
    {
        $this->job_location = $job_location;
    }

    public function getJobType()
    {
        return $this->job_type;
    }

    public function setJobType($job_type)
    {
        $this->job_type = $job_type;
    }

     
}

?>