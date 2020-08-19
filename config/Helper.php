<?php

namespace Config;
defined('BASEPATH') or exit('No se permite acceso directo');

/**
 * Class Helper
 * @package Config
 */
class Helper
{
    /**
     * @param $controller
     * @return bool
     */
    public static function validateController($controller)
    {
        if(!is_file(PATH_CONTROLLERS . "{$controller}/{$controller}Controller.php"))
            return false;
        return true;
    }

    /**
     * @param $controller
     * @param $method
     * @return bool
     */
    public static function validateMethodController($controller, $method)
    {
        if(!method_exists($controller, $method))
            return false;
        return true;
    }
}