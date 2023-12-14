<?php

// Phương thức __destruct là một trong các magic method trong PHP. 
// Nó được gọi tự động khi một đối tượng của một lớp bị hủy, 
// tức là khi không còn tham chiếu nào trỏ đến đối tượng đó hoặc khi đối tượng đó được giải phóng bộ nhớ.
// Phương thức __destruct rất hữu ích để thực hiện các tác vụ giải phóng 
// tài nguyên cuối cùng trước khi đối tượng bị hủy, ví dụ như đóng cơ sở dữ liệu, 
// giải phóng bộ nhớ hoặc thực hiện các xử lý dọn dẹp.

class abc {
    private $conn;

    public function __construct() 
    {
        $this->conn = mysqli_connect();
    }

    public function insert()
    {
        echo "Thêm sản phẩm lên db" . '</br>';
    }

    public function __destruct()
    {
        mysqli_close($this->conn);
    }
}

$test = new abc;
