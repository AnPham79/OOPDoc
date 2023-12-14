<?php
    class student{
        private static function hello($name) 
        {
            echo "hello" . ' ' . $name;
        }

        public static function __callStatic($method, $arguments) // method là phương thức và argument 1 mảng chứa các đối số được truyền vào
        {
            if (method_exists(__CLASS__, $method)) {
                call_user_func_array([__CLASS__, $method], $arguments);
            } else {
                echo "this is private method : $method";
            }
        }
    }

    // __CLASS__ là một hằng số đặc biệt, nó chứa tên của lớp mà nó được sử dụng trong.

    student::hello("An lão Gia");
?>