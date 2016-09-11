<?php
use PHPUnit\Framework\TestCase;


class IndexControllerTest extends TestCase
{

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