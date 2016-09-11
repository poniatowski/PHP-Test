<?php
namespace App\Controller;

use App\Model\WebPageModel;

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

            $webPage = new WebPageModel('data.ser');
            $person = $webPage->getFile();
        }

        include $this->layout;
    }


}
