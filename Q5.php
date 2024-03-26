<?php
class Person {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

class Employee extends Person {
    protected $employeeId;
    protected $salary;

    public function __construct($name, $age, $employeeId, $salary) {
        parent::__construct($name, $age);
        $this->employeeId = $employeeId;
        $this->salary = $salary;
    }

    public function getEmployeeId() {
        return $this->employeeId;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function displayDetails() {
        echo "Employee Details:<br>";
        echo "Name: " . $this->getName() . "<br>";
        echo "Age: " . $this->getAge() . "<br>";
        echo "Employee ID: " . $this->getEmployeeId() . "<br>";
        echo "Salary: " . $this->getSalary() . "<br>";
    }
}


$employee = new Employee("Realyn", 26, "EMP123", 50000);
$employee->displayDetails();
