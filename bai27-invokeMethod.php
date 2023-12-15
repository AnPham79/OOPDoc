<?php

// Phương thức __invoke() là một phương thức đặc biệt trong PHP 
// được sử dụng để gọi một đối tượng như một hàm. Khi một đối tượng 
// được định nghĩa với phương thức __invoke(), bạn có thể gọi đối tượng 
// đó như một hàm bằng cách sử dụng cú pháp $object(). Khi bạn gọi một 
// đối tượng dưới dạng hàm, phương thức __invoke() của đối tượng đó sẽ được gọi.

class calculator {
    public $a , $b;
    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function __invoke()
    {
        echo $this->a * $this->b;
    }
}

$text = new calculator(15, 29);

$text();