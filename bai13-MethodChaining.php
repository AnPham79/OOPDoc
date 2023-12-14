<?php

// Method chaining là một kỹ thuật trong lập trình hướng đối tượng cho phép gọi nhiều 
// phương thức trên một đối tượng một cách liên tục thông qua việc gắn các lời gọi 
// phương thức liền nhau. Kỹ thuật này thường được sử dụng khi các phương thức trả về 
// chính đối tượng mà chúng thuộc về, cho phép các lời gọi phương thức nối tiếp nhau 
// mà không cần phải lưu kết quả trả về của mỗi lời gọi.

class abc {
    public function first() {
        echo 'this is first function' . '</br>';
        return $this;
    }

    public function second() {
        echo 'this is second function' . '</br>';
        return $this;
    }

    public function third() {
        echo 'this is third function' . '</br>';
    }
}

$text = new abc;

// được gọi lần lượt ra bằng cách nối đuôi nhau 
// gọi là method chaining chúng cần được trả về để 
// gọi cái tiếp theo tuy nhiên kết thúc ở thirt nên
// trong trường hợp này chỉ first và second tham gia vào method chaining 

$text->first()->second()->third();