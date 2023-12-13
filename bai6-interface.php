<?php

interface parent1 {
    function calc($a, $b);
}

interface parent2 {
    function sub($c, $d);
}

class childClass implements parent1, parent2 {
    public function calc($a, $b) {
        echo $a + $b;
    }

    public function sub($c, $d) {
        echo $c - $d;
    }
}

$text = new childClass();

$text-> calc(20, 10);

echo "</br>";

$text-> sub(72, 32);