<?php
// Phương thức __construct() trong PHP là một phương thức đặc biệt được gọi tự động khi một đối tượng của một lớp được tạo ra bằng từ khóa new. 
// Nó thường được sử dụng để thực hiện các tác vụ khởi tạo khi một đối tượng mới được tạo.
// Mục đích chính của phương thức __construct() là cung cấp một cách để khởi tạo đối tượng của lớp bằng cách thiết lập các giá trị ban đầu 
// cho các thuộc tính hoặc thực hiện các công việc chuẩn bị mà đối tượng cần trước khi được sử dụng.

class User {
    public $username;
    public $email;

    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
        // Các công việc khác có thể được thực hiện ở đây khi tạo một đối tượng User
    }
}

$user = new User('john_doe', 'john@example.com');

?>