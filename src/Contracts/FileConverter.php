<?php

namespace Mklemersson\PptToJpeg\Contracts;

interface FileConverter
{
    public function convert($pathToSave);
}
