<?php 

class student {
    public $course = "PHP";
    private $first_name;
    private $last_name;

    public function setName($fName, $lName) {
        $this->first_name = $fName;
        $this->last_name = $lName;
    }

    public function __unset($property)
    {
        unset($this->$property);
    }
}

$test = new student();
$test->setName("Bảo An", "Phạm Ngọc");

// unset($test->first_name); dòng này để unset first Nam

print_r($test);