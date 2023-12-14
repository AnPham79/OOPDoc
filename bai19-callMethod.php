<!-- __call() là một phương thức đặc biệt trong PHP, 
cho phép bạn xử lý việc gọi một phương thức không tồn tại hoặc không được 
phép truy cập từ bên ngoài của một đối tượng. -->
<?php

class student
{
    private $firstName;
    private $lastName;

    private function setName($fName, $lName)
    {
        $this->firstName = $fName;
        $this->lastName = $lName;
    }

    public function __call($method, $arguments)
    {
        if (method_exists($this, $method)) {
            call_user_func_array([$this, $method], $arguments);
        } else {
            echo "method không tồn tại " . $method;
        }
    }
}

$text = new student();
$text->setName("Lão gia", "buồi to");

echo "<pre>";
print_r($text);
echo "</pre>";

// goi 2 thuôc tính là 1 phương thức set nhưng nó để ở chế độ priate nên không 
// thể gọi 1 cách thông thường được, Phương thức __call() được sử dụng để xử lý 
// các phương thức không tồn tại hoặc không thể truy cập từ bên ngoài lớp
// sử dụng method exists để kiểm tra xe, có tồn tại hay không, nếu có 
// sẽ gọi phương thức đó bằng call_user_func_array với các đối số tương ứng truyền vào

// Tuy nhiên, trong đoạn mã của bạn, phương thức setName() là private, 
// do đó không thể gọi trực tiếp từ bên ngoài lớp. Khi bạn thực hiện 
// $text->setName("Lão gia", "buồi to");, nó sẽ không gọi được phương thức 
// này vì nó không thể truy cập trực tiếp.

// Do đó, khi bạn in ra đối tượng $text bằng print_r($text);,
//  thuộc tính firstName và lastName vẫn sẽ giữ giá trị mặc định hoặc null 
//  (nếu không gán giá trị khởi tạo ban đầu), vì phương thức setName() 
//  không được gọi thành công để thiết lập giá trị cho chúng.

?>

