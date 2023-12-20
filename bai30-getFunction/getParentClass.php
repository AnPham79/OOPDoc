<?php

class abc {

}

class xyz extends abc {
    public function name() {
        echo "cha của xyz là " . get_parent_class($this);
    }
}

$text = new xyz();

echo $text->name();

echo '</br>';

echo 'class name is' , get_parent_class('xyz');
