<?php

namespace employeeManager;


class EmployeeManager
{
    private static $employee = [];
    static function add($employee)
    {
        self::$employee[] = $employee;
    }
    static function dele($index)
    {
        array_splice(self::$employee, $index, 1);
    }
    static function update($employee, $index)
    {
        self::$employee[$index] =$employee;
        
    }
    static function getEmployee()
    {
        return self::$employee;
    }
}

