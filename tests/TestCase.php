<?php

namespace Mklemersson\PptToJpeg\Tests;

use PHPUnit\Framework\TestCase as PhpUnitTestCase;

/**
 * Class TestCase
 * @package Mklemersson\PptToJpeg\Tests
 * @author Michael Klemersson
 */
class TestCase extends PhpUnitTestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->cleanOutputDir();
    }

    public function tearDown()
    {
        parent::tearDown();
        $this->cleanOutputDir();
    }

    /**
     * Just clean at the beginning and at the end the output directory for tests
     * 
     * @return void
     */
    protected function cleanOutputDir()
    {
        $path = realpath(__DIR__ . '/../output');
        $filesInDir = scandir($path);
        
        foreach ($filesInDir as $file) {
            if (!in_array($file, ['.', '..', '.gitkeep'])) {
                unlink("{$path}/{$file}");
            }
        }
    }
}
