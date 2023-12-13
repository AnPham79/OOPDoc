<?php
// Một Abstract Class trong lập trình hướng đối tượng là một lớp mà không thể tạo ra các đối tượng từ nó trực tiếp. 
// Thay vào đó, nó được sử dụng như một bản thiết kế (template) để kế thừa và mở rộng bởi các lớp con.

//Abstract Class / method .. lớp, phương thức trừu tượng

// Declare (Khai báo)

// Implement (Triển khai)

abstract class parentClass {
    public $name;

    abstract protected function calc($a, $b);
}

class childClass extends parentClass {
    public function calc($c, $d) {
        // echo $c + $d;
        echo "elele olala";
    }
}

$text = new childClass;

$text->calc(10, 20)
?>