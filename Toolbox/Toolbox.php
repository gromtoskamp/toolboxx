<?php

namespace T;

class Toolbox
{
    public static function debug($object)
    {
        echo '<pre>';
        print_r(array(
            $object->debug()
        ));
    }

}
