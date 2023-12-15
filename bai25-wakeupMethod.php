<?php

class student {
    public $course = "PHP";
    private $first_name;
    private $last_name;
    private $conn;

    public function __construct() {
        $this->conn = mysqli_connect();
    }

    public function setName($fName, $lName) {
        $this->first_name = $fName;
        $this->last_name = $lName;
    }

    public function __sleep()
    {
        mysqli_close($this->conn);
        return array('first_name', 'last_name');
    }

    public function __wakeup()
    {
        $this->conn = mysqli_connect();
        echo "this wake up method" . '</br>';
    }
}

$text = new student;

$text->setName("Bảo An", "Phạm Ngọc");

$srl = serialize($text);

$us = unserialize($srl);

// echo $srl;

print_r($us);