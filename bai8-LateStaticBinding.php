<?php

// Late Static Binding trong PHP liên quan đến việc sử dụng static trong các trường hợp kế 
// thừa để ghi đè các thuộc tính và phương thức tĩnh từ lớp cha mà không cần biết tên lớp hiện tại.
// static mở rộng vùng khai báo thây vì self chỉ trong class

class base {
    protected static $name = "Phạm Ngọc Bảo An";

    public function show() {
        echo static::$name . '</br>';
        echo self::$name . '</br>';
    }
}

class derived extends base {
    protected static $name = "An bu";
}

$text = new derived("");

$text->show();

// -------------------- // -------------------- // --------------------