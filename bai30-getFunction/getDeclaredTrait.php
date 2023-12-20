<?php

trait Message {
    
}

class abc {
    use Message;
}

class xyz extends abc {

}

print_r(get_declared_traits());