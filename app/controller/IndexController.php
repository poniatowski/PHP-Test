<?php
namespace App\Controller;

class IndexController extends BaseController
{
    public $model;
    public $result;

    public function __construct()
    {
        parent::__construct();
    }

    public function invoke()
    {
        if (!isset($_GET['err']))
        {
            // create token
            $this->createToken();

            $page = './index';
        }

        include $this->layout;
    }


}
