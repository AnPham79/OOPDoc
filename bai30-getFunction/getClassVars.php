<?php

class abc {
    public $var1;
    public $var2 = "hello";
    public $var3 = 100;
    private $var4;

    public function __construct() {
        print_r(get_class_vars(__CLASS__));
    }
}

$text = new abc();

$get_class_var = get_class_vars(get_class($text));

print_r($get_class_var);