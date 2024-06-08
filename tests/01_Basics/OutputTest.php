<?php

use Imaarov\Phping\Basics\Output;
use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase
{
    public function testOutput()
    {
        $this->assertEquals('sample output', Output::fixTheOutput());
    }
}
