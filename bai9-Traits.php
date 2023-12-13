<?php
// Traits dùng để tái sử dụng code
trait test {
    public function hello() {
        echo "hello anh em ditme";
    }

    public function goodbye() {
        echo "cút mẹ m đi";
    }
}

trait vclll {
    public function lmao() {
        echo "vãi lonn luôn đâu cắt moi";
    }
}

class A {
    use test;
}

class B {
    use test , vclll ;
}

$txt = new A;
$txt1 = new B;

$txt->hello();
$txt1->goodbye();
$txt1->lmao();
?>