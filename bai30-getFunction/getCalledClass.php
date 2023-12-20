<?php

class abc {
    static public function test() {
        print_r(get_called_class());
    }
}

class xyz extends abc {

}

abc::test();
echo "</br>";
xyz::test();