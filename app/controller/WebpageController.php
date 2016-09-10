<?php
namespace App\Controller;

use App\Model\WebPageModel;

class WebpageController extends BaseController
{
    public $model;
    public $result;
    public $fileName;

    public function __construct()
    {
        parent::__construct();
    }

    public function invoke()
    {
        $webPage = new WebPageModel('data.ser');
        $person = $webPage->getFile();

        $page = './webpage';

        include $this->layout;
    }


}