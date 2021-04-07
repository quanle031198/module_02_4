<?php
include "module/employee.php";
include "services/employeeManager.php";

use employee\Employee;
use employeeManager\EmployeeManager;

$employe1 = [
    'first_name' => 'Le',
    'last_name' => 'Quan',
    'brithday' => '02/12/1582',
    'address' => 'HN',
    'job_position' => 'siu nhan'

];
$employe2 = [
    'first_name' => 'Son',
    'last_name' => 'Tung',
    'brithday' => '02/12/1222',
    'address' => 'HN',
    'job_position' => 'singer'

];
$employe3 = [
    'first_name' => 'Hoang',
    'last_name' => 'Nam',
    'brithday' => '10/1/2220',
    'address' => 'HN',
    'job_position' => 'Mafia'

];

$employe4 = [
    'first_name' => 'Van',
    'last_name' => 'Hoa',
    'brithday' => '10/5/2220',
    'address' => 'HN',
    'job_position' => 'Cop'

];

$data1 = new Employee($employe1);
EmployeeManager::add($data1);
$data2 = new Employee($employe2);
EmployeeManager::add($data2);
$data3 = new Employee($employe3);
EmployeeManager::add($data3);
$data4 = new Employee($employe4);

// EmployeeManager::update($data4, 1);

// EmployeeManager::dele(2);


$getData = EmployeeManager::getEmployee();

for ($i = 0; $i < count($getData); $i++) {
    echo ($i+1). " ". $getData[$i]->getFirst_name(). " ";
    echo $getData[$i]->getLast_name(). " ";
    echo $getData[$i]->getBrithday(). " ";
    echo $getData[$i]->getAddress(). " ";
    echo $getData[$i]->getJob_position(). "<br/>";
    
}
