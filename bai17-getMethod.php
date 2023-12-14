<?php

// Trong lập trình hướng đối tượng (OOP), 
// phương thức GET thường được sử dụng trong ngữ 
// cảnh của RESTful API hoặc khi làm việc với HTTP. 
// Trong PHP, GET thường được sử dụng để nhận dữ liệu 
// được gửi từ trình duyệt hoặc từ yêu cầu HTTP.

class abc {
    private $data = ['name' => 'AnPaul', 'course' => 'PHP', 'fee' => 2000];

    public function __get($key) {
        if(array_key_exists($key, $this->data)) {
            return $this->data[$key];
        } else {
            return $key . 'của bạn không hợp lệ';
        }
    }
}

$text = new abc;

echo $text->name;
echo '</br>';
echo $text->course;
echo '</br>';
echo $text->fee;