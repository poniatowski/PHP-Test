<?php
namespace App\Model;

use App\Model\BaseModel;

class FileModel extends BaseModel
{
    public $fileName;

    public function __construct($fileName = 'string')
    {
        $this->fileName = $fileName;
    }

    public function save($content)
    {
        // chmod($logfile, 0777);
        if(file_put_contents('./../' . DIRECTORY_SEPARATOR . LIB . $this->fileName, $content)) {
            return true;
        }

        return false;
    }

    public function load($fileName)
    {
        if (file_exists('./../' .LIB . $fileName)) {
            return file_get_contents('./../' . LIB . $fileName, true);
        }
        return false;
    }

    public function edit(){}
    public function destroy(){}



}