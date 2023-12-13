<?php

// Trong PHP, "type hinting" là một tính năng cho phép bạn xác định kiểu dữ liệu mong đợi cho các tham số 
// của các hàm hoặc phương thức. Nó giúp đảm bảo rằng các giá trị được truyền vào hàm sẽ phải là một kiểu cụ thể, 
// giúp tăng tính chính xác và dễ bảo trì của mã.

function fruit(array $names) {
    foreach ($names as $name) {
        echo $name . "\n";
    }
}

$test = ['apple', 'banana', 'orange'];

fruit($test);

// vi dụ 2

// ------------------------------------ // --------------------------------

echo "</br>";

// ------------------------------------ // -----------------------------
class hello {
    public function sayhello() {
        echo "hello xin chào các bạn mình là an dev web lõ cặc";
    }
}

class bye {
    public function saybye() {
        echo "tạm biệt ae, cảm ơn ae đã ghé thăm an dev cặc lõ";
    }
}

// có một hàm không thuộc về lớp nào cả, có tên là wow. 
// Hàm này nhận một tham số, và type hinting đối với tham số này là hello
// có nghĩa là hàm này chỉ chấp nhận một đối tượng thuộc lớp hello hoặc lớp con của hello
function wow(hello $c) {
    $c->sayhello();
}

$text = new hello();

wow($text);

// ------------------------------- // ----------------------

echo "</br>";

// ----------------------- vi dụ 3 ------------------------
class school {
    public function getName($names) {
        foreach ($names->Names() as $name) {
            echo $name . '</br>';
        }
    }
}

class student {
    public function Names() {
        return  ['An', 'Thiên', 'Bôn', 'Hưng'];
    }
}

$sch = new school();
$stu = new student();

$sch->getName($stu);