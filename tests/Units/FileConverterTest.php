<?php

namespace Mklemersson\PptToJpeg\Tests\Units;

use Mklemersson\PptToJpeg\Tests\TestCase;

class FileConverterTest extends TestCase
{
    public function testCanNotConvertUnexistentFile()
    {
        $fileHandler = new PptToPdfConverter(null);

        $this->expectException(FileNotExistException::class);
        $this->expectExceptionMessage('The file does not exists');
    }

    // public function testCanNotConvertAInvalidFile()
    // {

    // }
}
