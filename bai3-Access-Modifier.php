<?php

// Access Modifier (Bộ điều khiển truy cập) 
// được sử dụng để kiểm soát quyền truy cập vào các thuộc tính và phương thức của một lớp (class). 
// Có ba loại Access Modifier chính public , private , protected

// public thì có thể truy cập từ bên ngoài lớp hoặc phương thức
// protected thì chỉ được truy cập từ bên trong lớp kế thừa hoặc trong lớp
// private thì chỉ được truy cập từ bên trong lớp, không được từ bên ngoài và lớp kế thừa

// ----------------------- public ---------------------------------

class testPublic {
    public $name;

    public function __construct($n) {
        $this->name = $n;
    }

    public function getName() {
        echo "Tên của bạn là:" . $this->name . "</br>";
    }
}

$getName = new testPublic("An đẹp trai siêu cấp");

$getName->getName();

// -------------------------------- protected ------------------------------

class testProtected {
    protected $name;

    public function __construct($n) {
        $this->name = $n;
    }

    protected function getName() {
        return "Tên của bạn là: " . $this->name . "</br>";
    }
}

class testProtectedChild extends testProtected {
    public function showName() {
        echo $this->getName();
    }
}

$obj = new testProtectedChild("An hết đẹp trai");

$obj->showName();

// ----------------------------- private ------------------------------------
class testPrivate {
    private $name;

    public function __construct($n) {
        $this->name = $n;
    }

    public function getName() {
        return $this->name;
    }
}

class testPrivateChild extends testPrivate {
    public function showName() {
        return "Tên của bạn là: " . $this->getName() . "</br>";
    }
}

$obj = new testPrivateChild("An đã đẹp trai lại");
echo $obj->showName();


