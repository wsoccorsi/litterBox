<?php
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testTrue()
    {
        $value = true;
        $this->assertTrue($value);
    }

    public function testEmpty()
    {
        $arr = [];
        $this->assertEmpty($arr);
    }
    
    public function testProcessor()
    {
        $processor = new \App\Processor\MyProcessor();
        $this->assertEquals('John', $processor->process('john'));
        $this->assertEquals('John', $processor->process('JOHN'));
    }

}
?>