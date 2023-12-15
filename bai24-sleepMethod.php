<?php
// sleep là một phương thức có sẵn trong một số ngôn ngữ lập trình, 
// như PHP, được sử dụng để tạm ngừng thực thi của một chương trình 
// trong một khoảng thời gian cụ thể, được xác định bằng giây.

class student {
    public $course = "PHP";
    private $first_name;
    private $last_name;

    public function setName($fName, $lName) {
        $this->first_name = $fName;
        $this->last_name = $lName;
    }

    public function __sleep()
    {
        return array('first_name', 'last_name');
    }
}

$text = new student;

$text->setName("Bảo An", "Phạm Ngọc");

$srl = serialize($text);

echo $srl;

// Thời gian chờ đợi (5 giây) load dữ liệu ra, 1 ví dụ cụ thể khi sử dụng sleep
// $waiting_time = 2;

// // Đợi cho đến khi hết thời gian chờ đợi
// sleep($waiting_time);

// // Hiển thị thông báo sau khi đã đợi xong
// echo "Chào mừng bạn đến với ứng dụng của chúng tôi sau $waiting_time giây!";
?>