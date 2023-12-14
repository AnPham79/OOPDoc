<?php

// Trong PHP, autoload method (phương thức autoload) là một cách để tự động tải các 
// lớp mà bạn sử dụng trong mã của mình mà không cần phải gọi hàm require hoặc include 
// một cách thủ công cho từng lớp.

// require 'first.php';

// ------------------------------------------------------------------
//                                                                   |
// function __autoload($class_name) {                                |
//     require_once "bai16-autoLoadMethod/" . $class_name . '.php';  |
// };                                                                |
//                                                                   |
// $text = new anotherSecond();                                      |
// $text = new first(); $text->                                      |
// ------------------------------------------------------------------ 

// auto load không còn hỗ trợ ở phiên bản 7.2 của PHP trở lên nữa nên dùng cách này

spl_autoload_register(function ($class_name) {
    require_once "bai16-autoLoadMethod/" . $class_name . '.php';
});

$text = new anotherSecond();
$text = new first();

// lỗi banh xác :)))


