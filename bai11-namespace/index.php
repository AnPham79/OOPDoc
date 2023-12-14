<?php

// Trong PHP, namespace là một cách để quản lý và tổ chức mã nguồn của bạn thành các nhóm logic riêng biệt. 
// Nó cho phép bạn đặt các lớp, hằng số, hàm và các thành phần khác vào các "không gian tên" (namespace), 
// giúp tránh xung đột tên và tạo ra sự tổ chức rõ ràng cho mã nguồn của bạn.

require 'file2.php';
require 'file3.php';

function wow() {
    echo "a đù má file index";
}

// ví du đặt namespace file 2 thành pro\v1\command thì qua bên này gọi namespaces cũng phải gọi hết như vậy

// thây vì gọi như vậy thì nó dài quá ta có thể gán cho nó bằng 1 lệnh ngắn hơn

use pro\v1\command as cmd;

$objFile2 = new cmd\Product();
// $objFile3 = new file3\Product();

echo "</br>";

// file3\wow();

?>