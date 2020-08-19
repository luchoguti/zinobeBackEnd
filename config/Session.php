<?php


namespace Config;


/**
 * Class Session
 * @package App
 */
class Session
{

    /**
     *
     */
    public function init()
    {
        session_start();
    }


    /**
     * @param $key
     * @param $value
     */
    public function add($key, $value)
    {
        $_SESSION[$key] = $value;
    }


    /**
     * @param $key
     * @return mixed|null
     */
    public function get($key)
    {
        return !empty($_SESSION[$key]) ? $_SESSION[$key] : null;
    }


    /**
     * @return array
     */
    public function getAll()
    {
        return $_SESSION;
    }


    /**
     * @param $key
     */
    public function remove($key)
    {
        if(!empty($_SESSION[$key]))
            unset($_SESSION[$key]);
    }


    /**
     *
     */
    public function close()
    {
        session_unset();
        session_destroy();
    }


    /**
     * @return int
     */
    public function getStatus()
    {
        return session_status();
    }

    public function validate_session()
    {
        if(isset($_SESSION['email'])||isset($_SESSION['name_user'])){
            return true;
        }else{
            return false;
        }
    }
}