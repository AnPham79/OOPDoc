<?php

class abc {
    public function getClass() {
        echo "đây là class: " . get_class($this);
    }
}

$text = new abc();

echo $text->getClass();

echo "</br>";

echo "class name là" . ' ' . get_class($text);