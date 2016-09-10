<?php
use PHPUnit\Framework\TestCase;


class FileModelTest extends TestCase
{
    public function TestSave()
    {
        $content = json_encode([
            'key_0' => 'Fake data 1',
            'key_1' => 'Fake data 2',
            'key_2' => 'Fake data 3',
            'key_3' => 'Fake data 4'
        ]);

        $fileName = 'test';

        $result = file_put_contents('./../../' . LIB . $fileName, $content);

        $this->assertEquals(true, $result);
    }

    public function TestLoad()
    {
        $fileName = 'test';

        $result = file_get_contents('./../../' . LIB . $fileName, true);

        $this->assertEquals(true, $result);
    }


}