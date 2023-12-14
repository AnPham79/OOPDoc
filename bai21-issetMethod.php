<?php

// Trong PHP, isset() là một hàm được sử dụng để kiểm tra 
// xem một biến đã được khai báo và có giá trị khác null không. 
// Hàm này trả về true nếu biến tồn tại và có giá trị, 
// và false nếu biến không tồn tại hoặc có giá trị là null.

class student {
    private $first_name = "Bảo An";
    private $last_name = "Phạm Ngọc";
    public $course = "PHP";
    private $detail = ['name' => 'Phạm An', 'age' => 19];

    public function setName($fName, $lName) {
        $this->first_name = $fName;
        $this->last_name = $lName;
    }

    public function __isset($name)
    {
        return isset($this->detail[$name]);
    }
}

$text = new student();

// echo isset($text->name); chạy dòng này thông báo ra 1 vì nó có
