<?php

namespace Mklemersson\PptToJpeg;

use Mklemersson\PptToJpeg\Contracts\FileConverter;

abstract class AbstractFileConverter implements FileConverter
{
    protected $file;

    protected $fileInfo;

    public function __constructor($file)
    {
        if (!file_exists($file)) {
            throw new \Exception();
        }
    }
}
