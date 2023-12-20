<?php
echo "<h1>Ví dụ về magic constant</h1>";

// Magic constants là các hằng số đặc biệt trong PHP được định nghĩa sẵn 
// và luôn tự động cập nhật giá trị dựa trên ngữ cảnh mà chúng được sử dụng. 
// Các hằng số này bắt đầu bằng hai dấu gạch dưới (__) 
// và có thể được sử dụng trong bất kỳ đâu trong mã PHP.

class Example {
    public function showConstants() {
        echo "Line: " . __LINE__ . "<br>";
        echo "File: " . __FILE__ . "<br>";
        echo "Directory: " . __DIR__ . "<br>";
        echo "Function: " . __FUNCTION__ . "<br>";
        echo "Class: " . __CLASS__ . "<br>";
        echo "Method: " . __METHOD__ . "<br>";
    }
}

// --------------------------- END --------------------------------

trait MyTrait {
    public function getTraitName() {
        return __TRAIT__;
    }
}

class myClass {
    use MyTrait;
}

$text = new myClass();
echo $text->getTraitName() . "</br>";

$example = new Example();
$example->showConstants();