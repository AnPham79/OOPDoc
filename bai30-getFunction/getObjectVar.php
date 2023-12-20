<?php

class abc {
    public $var1;
    public $var2 = "hello";
    public $var3 = 100;
    private $var4;

    public function __construct() {
        $this->var1 = "là đụ cái con đỉ mẹ mày";
        $this->var2 = "là là ??";
        print_r(get_object_vars($this));
    }
}

$obj = new abc();

$get_class_var = get_object_vars($obj);

print_r($get_class_var);