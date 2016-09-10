<?php
namespace App\Model;

class WebPageModel extends FileModel
{
    public $fileName;
    public $logfile;

    public function __construct($fileName) //  = 'string'
    {
        $this->fileName = $fileName;
    }

    public function getFile()
    {
        return unserialize($this->load($this->fileName));
    }



}