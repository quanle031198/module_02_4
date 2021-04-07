<?php
namespace employee;
class Employee {
    private $first_name;
    private $last_name;
    private $brithday;
    private $address;
    private $job_position;
    function __construct($data)
    {
        $this->first_name = $data['first_name'];
        $this->last_name = $data['last_name'];
        $this->brithday = $data['brithday'];
        $this->address = $data['address'];
        $this->job_position = $data['job_position'];
    }
    
    public function getFirst_name()
    {
        return $this->first_name;
    }

    public function getLast_name()
    {
        return $this->last_name;
    }

    public function getBrithday()
    {
        return $this->brithday;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getJob_position()
    {
        return $this->job_position;
    }
}
