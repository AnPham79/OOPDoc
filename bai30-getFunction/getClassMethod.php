<?php

class abc {
    public function __construct() {
        print_r(get_class_methods($this));
    }

    public function func1() {

    }

    public function func2() {

    }
}

$get_class_method = get_class_methods('abc');

print_r($get_class_method);

foreach ($get_class_method as $methods) {
    echo $methods . "\n";
}