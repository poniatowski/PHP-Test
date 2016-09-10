<?php

namespace App\Controller;

abstract class BaseController
{
    const SESSION_TOKEN = '_token';

    public $layout;
    public $inputsP;
    public $inputsG;

    public function __construct()
    {
        $this->layout  = '../app/view/_main.php';

       if (isset($_GET))
            $this->inputsG = $this->escapeSqlInject($_GET);
        if (isset($_POST))
            $this->inputsP = $this->escapeSqlInject($_POST);
    }

    public function escapeSqlInject($in)
    {
        foreach ($in as $n => $p)
        {
            if (is_array($p)) $in[$n] = $this->escapeSqlInject($p);
            else $in[$n] = addslashes(htmlspecialchars($p));
        }
        return $in;
    }

    public function checkIfAjax()
    {
        $access = false;

        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
        {
            // safety ajax
            $access = true;
        }

        return $access;
    }

    public function createToken()
    {
        return $_SESSION[SESSION_TOKEN] = md5(SALT . mt_rand(1,1000000) . SALT);
    }


}