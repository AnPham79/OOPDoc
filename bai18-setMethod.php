<?php
// Phương thức __set() trong PHP được sử dụng để gán giá trị cho các 
// thuộc tính không tồn tại hoặc không được phép truy cập trong một lớp.

class abc {
    private $name;

    public function hello() {
        return $this->name;
    }

    public function __get($property) {
        echo 'You are trying to access a non-existent or private property ' . $property;
    }

    public function __set($property, $value) {
        if(property_exists($this, $property)) {
            $this->$property = $value; 
        } else {
            echo 'Property does not exist: ' . $property;
        }
    }
}

$text = new abc();
$text->name = "lão gia buồi to";

echo $text->hello();

?>

<!-- Class abc:
Có một thuộc tính private $name.
Phương thức hello() trả về giá trị của $name.

Phương thức __get():
Được gọi khi bạn cố gắng truy cập vào một thuộc tính không tồn tại hoặc là private trong class.
Trong trường hợp này, nó sẽ hiển thị thông báo "You are trying to access a non-existent or private property" 
cùng với tên thuộc tính mà bạn cố gắng truy cập.

Phương thức __set():
Được gọi khi bạn cố gắng gán giá trị cho một thuộc tính không tồn tại hoặc là private trong class.
Nó kiểm tra xem thuộc tính có tồn tại trong đối tượng hay không bằng hàm property_exists().
Nếu thuộc tính tồn tại, nó gán giá trị $value cho thuộc tính đó ($this->$property = $value).
Nếu thuộc tính không tồn tại, nó hiển thị thông báo "Property does not exist" 
cùng với tên thuộc tính bạn cố gắng gán giá trị vào.

Đoạn mã chạy:
Tạo một đối tượng mới từ class abc.
Gán giá trị "lão gia buồi to" cho thuộc tính $name.
Gọi phương thức hello(), nhưng sẽ không có kết quả vì 
$name là private và không thể truy cập trực tiếp từ bên ngoài class. -->