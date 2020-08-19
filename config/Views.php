<?php

namespace Config;
use Jenssegers\Blade\Blade;

/**
 * Class Views
 * @package Config
 */
class Views
{
    /**
     * @var string
     */
    private $dir;

    /**
     * Views constructor.
     */
    public function __construct()
    {
        $name_dir = explode ('/',$_SERVER['REQUEST_URI']);
        $this->dir = $_SERVER['DOCUMENT_ROOT'].'/'.$name_dir[1].'/';
    }

    /**
     * @return Blade
     */
    public function getBlade()
    {
        return new Blade($this->dir.'resources/views', 'cache');
    }

}