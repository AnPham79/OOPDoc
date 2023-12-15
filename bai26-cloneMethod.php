<?php

 // Phương thức __clone() trong PHP là một phương thức đặc biệt 
 // thuộc về lập trình hướng đối tượng (OOP). Nó được sử dụng để tùy chỉnh hoặc 
 // thay đổi cách một đối tượng được sao chép.

// Khi bạn sao chép một đối tượng sử dụng từ khóa clone, 
// phương thức __clone() sẽ được gọi tự động nếu nó được định nghĩa trong lớp của đối tượng đó. 
// Điều này cho phép bạn điều chỉnh các tham số hoặc thuộc tính của đối tượng sao chép trước khi nó được tạo.

// test 

// $a = 10;
// $b = & $a;
// $b = 10;

// echo $a;

class student {
    public $name;
    public $course; 

    public function __construct($n) {
        $this->name = $n;
    }

    public function setCourse(cource $c) { 
        $this->course = $c;
    }

    public function __clone()
    {
        $this->course = clone $this->course;
    }
}

class cource {
    public $cname;

    public function __construct($cname) {
        $this->cname = $cname;
    }
}

$student1 = new student("An Lão Gia");
$course1 = new cource('php'); // Sửa tên biến thành 'course1'

$student1->setCourse($course1); // Sửa tên phương thức gọi

$student2 = clone $student1;

$student2->name = "An Phạm";

$student2->course->cname = "RUBY";

print_r($student1);
print_r($student2);


