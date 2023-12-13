<?php

//Trong lập trình hướng đối tượng, các thành viên tĩnh (static members) là các thành viên của một lớp không phụ thuộc vào bất kỳ thể hiện (instance) cụ thể nào của lớp đó. Các thành viên tĩnh thuộc về lớp chứ không phải thuộc về các đối tượng cụ thể được tạo ra từ lớp đó.

// Các thành viên tĩnh có thể bao gồm:

// Thuộc tính tĩnh (static properties): Đây là các biến thuộc về lớp chứ không phải đối tượng cụ thể. Tất cả các thể hiện của lớp đều chia sẻ cùng một bản sao của thuộc tính tĩnh này.

// Phương thức tĩnh (static methods): Tương tự, các phương thức tĩnh cũng thuộc về lớp và không cần phải tạo thể hiện của lớp để gọi chúng. Chúng không có quyền truy cập vào các thuộc tính hoặc phương thức không tĩnh của lớp.

// Sử dụng các thành viên tĩnh có thể hữu ích trong các tình huống như:

// Chia sẻ dữ liệu: Nếu bạn muốn lưu trữ thông tin chung cho tất cả các thể hiện của một lớp (ví dụ: số lượng thể hiện đã được tạo ra).

// Tiện ích hàm: Đôi khi, có những hàm mà bạn muốn sử dụng mà không cần phải tạo đối tượng. Các phương thức tĩnh có thể được sử dụng như các tiện ích hoặc hàm trợ giúp.

class base {
    public static $name = "Phạm Ngọc Bảo An";

    // Sử dụng self để truy cập thuộc tính tĩnh trong cùng class

    public static function show() {
        echo self::$name;
    }

    public function __construct($n) {
        self::$name = $n;
    }
}

// echo base::$name . "</br>";

// echo "hoặc" . "</br>";

// base::show() . "</br>";

$text = new base("vai lonn luôn ddauaf cắt");

$text -> show();

// ----------------------------------- // --------------------------------

class base2 {
    public static $name = "Phạm Ngọc Bảo An";
}

class derived extends base2 {
    public static function show() {
        echo parent::$name;
    }
}

$textt = new derived();

$textt-> show();


