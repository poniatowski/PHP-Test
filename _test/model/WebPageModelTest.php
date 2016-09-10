<?php
use PHPUnit\Framework\TestCase;

use App\Model\FileModel;

class WebPageModelTest extends TestCase
{

    public function TestGetFile()
    {
        $fileName = 'test';

        $content = json_encode([
            'key_0' => 'Fake data 1',
            'key_1' => 'Fake data 2',
            'key_2' => 'Fake data 3',
            'key_3' => 'Fake data 4'
        ]);

        file_put_contents('./../../' . LIB . $fileName, $content);

        $class = new FileModel();
        $arr = unserialize($class->load($fileName));

        $this->assertEquals(4, count($arr));
    }


}