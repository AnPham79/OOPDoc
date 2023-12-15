<?php

class abc {
    public function __toString()
    {
        return "chuyển đổi kiểm dữ liệu sang string bằng __string" . get_class($this);
    }
}

$text = new abc;

echo $text;