<?php
require_once "PHPUnit/Autoload.php";
require_once "user.php";

class UserTest extends PHPUnit_Framework_TestCase
{
    protected $user;
    // test the talk method
    public function testTalk() {
        $expected = "Hello world!!";
        $actual = $this->user->talk();
        $this->assertEquals($expected, $actual);
    }
    public function testGetName() {
        $expected = "Tom";
        $actual = $this->user->getName();
        $this->assertEquals($expected, $actual);
    }
    public function testDoSomething() {
        $expected = 323;
        $actual = $this->user->doSomething();
        $this->assertEquals($expected, $actual);
    }
    protected function tearDown() {
        unset($this->user);
    }
    protected function setUp() {
        $this->user = new User();
        $this->user->setName("Tom");
    }
}
