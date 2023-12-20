<?php 

// Conditional function có thể được hiểu như việc sử dụng một hàm 
// dựa trên một điều kiện cụ thể. Điều này có thể được thực hiện 
// bằng cách sử dụng câu lệnh điều kiện (if-else hoặc switch) để 
// xác định xem hàm nào sẽ được gọi dựa trên điều kiện đó 
// vd như class_exists, interface_exists, ... .

// -------------------------------------------------- // --------------------------------

// echo "class_exists";

// echo "</br>";

// class myClass {

// }

// if (class_exists('myClass')) {
//     echo 'nứng quá anh ba ơi';
// } else {
//     echo 'tắt nứng';
// }

// --------------------------------------------------- // --------------------------------

// echo "interface_exists";

// echo "</br>";

// interface myInterface {

// }

// if (interface_exists('myInterface')) {
//     echo 'nứng quá anh ba ơi';
//     class myClass implements myInterface {

//     }
// } else {
//     echo 'tắt nứng';
// }

// ---------------------------------------- // -------------------------------------

// echo "method_exists";

// echo "</br>";

// class myClass {
//     public function myMethod() {

//     }
// }

// $text = new myClass();

// if (method_exists($text, 'myMethod')) {
//     echo 'nứng quá anh ba ơi';
// } else {
//     echo 'tắt nứng';
// }

// ---------------------------------------- // -------------------------------------

// echo "traits_exists";

// echo "</br>";

// trait myTrait {
//     public function myMethod() {

//     }
// }

// if (trait_exists('myTrait')) {
//     echo 'nứng quá anh ba ơi';
//     class MyClass {
//         use myTrait;
//     }
// } else {
//     echo 'tắt nứng';
// }

// ---------------------------------------- // -------------------------------------

// echo "property_exists";

// echo "</br>";

// class myClass {
//     public $test;
// }

// if (property_exists('myClass', 'test')) {
//     echo 'nứng quá anh ba ơi';
// } else {
//     echo 'tắt nứng';
// }

// ---------------------------------------- // -------------------------------------

// echo "is_a";

// echo "</br>";

// class myClass {
    
// }

// $text = new myClass;

// if (is_a($text, 'myClass')) {
//     echo 'nứng quá anh ba ơi';
// } else {
//     echo 'tắt nứng';
// }

// ---------------------------------------- // -------------------------------------

echo "subclass_of";
echo "</br>";

class myClass {
}

class mySubClass extends myClass {
}

$text = new mySubClass();

if (is_subclass_of($text, 'myClass')) {
    echo 'Đối tượng là một lớp con của myClass';
} else {
    echo 'Đối tượng không phải là lớp con của myClass';
}
