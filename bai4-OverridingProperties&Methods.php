<?php
 // Overriding trong PHP OOP là quá trình mà một lớp con (subclass) 
 // định nghĩa lại (override) một phương thức hoặc thuộc tính mà nó kế thừa từ lớp cha (superclass).

// Phương thức hoặc thuộc tính trong lớp cha phải có từ khóa public hoặc protected để cho phép lớp con override nó.
// Trùng tên phương thức hoặc thuộc tính cần override.
// Cùng chữ ký (cùng tên và cùng tham số) cho phương thức.
// Phương thức hoặc thuộc tính trong lớp con sẽ override phương thức hoặc thuộc tính tương ứng trong lớp cha.

// hiểu cơ bản là ghi đè phường thức củ bằng phương thức mới từ thẻ kế thừa thẻ đc kế thừa

class parrent {
    public $name = "12345678";

    public function calc($a, $b) {
        return $a * $b;
    }
}

class children extends Parrent {
    public $name = "1234565677776";

    public function calc($a, $b) {
        return $a + $b;
    }
}

$text = new children();

echo $text->calc(5, 10);
?>