<?php

// tính kế thừa

class employer {
    public $name;
    public $age;
    public $salary;

    public function __construct($n, $a, $s) {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    public function profile() {
        echo "<h3>Thông tin cá nhân nhân viên</h3>";
        echo "tên của nhân viên là:" . $this->name . "<br />";
        echo "tuổi của nhân viên là:" . $this->age . "<br />";
        echo "lương của nhân viên là:" . $this->salary . '$' . "<br />";
    }

}

class manager extends employer {
    public $priceProject = 1000;
    public $salaryManager = 3000;
    public $totalSalary;

    function profile() {
        $this->totalSalary = $this->priceProject + $this->salaryManager;

        echo "<h3>Thông tin cá nhân quản lí</h3>";
        echo "tên của nhân viên là:" . $this->name . "<br />";
        echo "tuổi của nhân viên là:" . $this->age . "<br />";
        echo "lương của nhân viên là:" . $this->totalSalary . '$' . "<br />";
    }
}

$pf = new employer("An", 21, 2000);
$pfM = new manager("Annn", 25 , 0);

$pf->profile();
$pfM->profile();