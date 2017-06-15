<?php

class View
{
    public static function renderFile($fileName, $return = false)
    {
        ob_start();
        require $fileName;
        $result = ob_get_clean();
        if ($return) {
            return $result;
        }
        echo $result;
    }

}