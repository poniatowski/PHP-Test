<?php
namespace App\Controller;

use App\Model\FileModel;

class SaveController extends BaseController
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
        if (!isset($_GET['book']))
        {
            $fileName = 'data.ser';
            $fileObj = new FileModel($fileName);
            $argString = serialize($this->inputsP);
            $fileObj->save($argString);

            $_SESSION['alert'] = 'Your file has been save successfully!';
            header('Location: /');
        }
    }


}