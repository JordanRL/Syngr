<?php
namespace Syngr;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-09-22 at 08:42:26.
 */
class ObjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Object
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Object(array(0));
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Syngr\Object::is_a()
     */
    public function testIs_a()
    {
        $this->assertTrue($this->object->is_a('Syngr\Object'));
    }

}
