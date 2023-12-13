<?php

// hàm constructor

class person {
    public $name;
    public $age;

    public function __construct ($name = "an", $age = 19) {
        $this->name = $name;
        $this->age = $age;
    }

    public function show() {
        echo $this->name . ' ' . $this->age . "\n";
    }
}

$text1 = new person;
$text2 = new person("bảo an" , 19);
$text3 = new person("pỏn", 19);

$text1 -> show();
$text2 -> show();
$text3 -> show();