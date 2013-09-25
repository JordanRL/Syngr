<?php
namespace Syngr;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-09-22 at 08:42:26.
 */
class NumberTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Number
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Number(100);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     */
    public function testGetInitialContent()
    {
        $this->assertEquals(100, $this->object->value());
    }

    /**
     * @covers Syngr\Number::absolute()
     */
    public function testAbsolute()
    {
        $this->object->setContent(-100);
        $this->assertEquals(
            100,
            $this->object->absolute()->value()
        );
    }

    /**
     * @covers Syngr\Number::ceiling()
     */
    public function testCeiling()
    {
        $this->object->setContent(4.8);
        $this->assertEquals(
            5,
            $this->object->ceiling()->value()
        );
    }

    /**
     * @covers Syngr\Number::floor()
     */
    public function testFloor()
    {
        $this->object->setContent(4.8);
        $this->assertEquals(
            4,
            $this->object->floor()->value()
        );
    }

    /**
     * @covers Syngr\Number::round()
     */
    public function testRound()
    {
        $this->object->setContent(4.3456);
        $this->assertEquals(
            4.35,
            $this->object->round(2)->value()
        );
    }

    /**
     * @covers Syngr\Number::max()
     */
    public function testMax()
    {
        $this->object->setContent(5);
        $this->assertEquals(
            9,
            $this->object->max(array(1, 7, 9))->value()
        );
    }

    /**
     * @covers Syngr\Number::min()
     */
    public function testMin()
    {
        $this->object->setContent(5);
        $this->assertEquals(
            1,
            $this->object->min(array(1, 7, 9))->value()
        );
    }

    /**
     * @covers Syngr\Number::sqrt()
     */
    public function testSqrt()
    {
        $this->object->setContent(49);
        $this->assertEquals(
            7,
            $this->object->sqrt()->value()
        );
    }

    /**
     * @covers Syngr\Number::convert()
     */
    public function testConvert()
    {
        $this->markTestIncomplete('Not yet implemented');
    }

    /**
     * @covers Syngr\Number::random()
     */
    public function testRandom()
    {
        $this->markTestIncomplete('Not yet implemented');
    }

    /**
     * @covers Syngr\Number::random()
     */
    public function testRandomWithinRange()
    {
        $this->markTestIncomplete('Not yet implemented');
    }

    /**
     * @covers Syngr\Number::exp()
     */
    public function testExp()
    {
        $this->assertEquals(M_E, $this->object->exp(1)->value());
    }

    /**
     * @covers Syngr\Number::exp()
     */
    public function testExpMinusOne()
    {
        $this->markTestIncomplete('Not yet implemented');
    }

    /**
     * @covers Syngr\Number::log()
     */
    public function testLog()
    {
        $this->object->setContent(10);
        $this->assertEquals(1.0, $this->object->log(10)->value());
    }

    /**
     * @covers Syngr\Number::log()
     */
    public function testLogNatural()
    {
        $this->object->setContent(1);
        $this->assertEquals(0.0, $this->object->log('e')->value());
    }

    /**
     * @covers Syngr\Number::log()
     */
    public function testLogWithBase()
    {
        $this->object->setContent(2);
        $this->assertEquals(1.0, $this->object->log(2)->value());
    }

    /**
     * @covers Syngr\Number::pow()
     */
    public function testPow()
    {
        $this->object->setContent(2);
        $this->assertEquals(256, $this->object->pow(8)->value());
    }

    /**
     * @covers Syngr\Number::cos()
     */
    public function testCosArc()
    {
        $this->object->setContent(1);
        $this->assertEquals(
            0,
            $this->object->cos(array(Number::TRIG_ARC))->value()
        );
    }

    /**
     * @covers Syngr\Number::cos()
     */
    public function testCos()
    {
        $this->object->setContent(M_PI);
        $this->assertEquals(-1, $this->object->cos()->value());
    }

    /**
     * @covers Syngr\Number::cos()
     */
    public function testCosHyperbolic()
    {
        $this->object->setContent(0);
        $this->assertEquals(
            1,
            $this->object->cos(array(Number::TRIG_HYPERBOLIC))->value()
        );
    }

    /**
     * @covers Syngr\Number::cos()
     */
    public function testCosInverseHyperbolic()
    {
        $this->object->setContent(1);
        $this->assertEquals(
            0,
            $this->object->cos(array(Number::TRIG_INVERSE_HYPERBOLIC))->value()
        );
    }

    /**
     * @covers Syngr\Number::sin()
     */
    public function testSinArc()
    {
        $this->object->setContent(0);
        $this->assertEquals(
            0,
            $this->object->sin(array(Number::TRIG_ARC))->value()
        );
    }

    /**
     * @covers Syngr\Number::sin()
     */
    public function testSin()
    {
        $this->object->setContent(M_PI_2);
        $this->assertEquals(1, $this->object->sin()->value());
    }

    /**
     * @covers Syngr\Number::sin()
     */
    public function testSinHyperbolic()
    {
        $this->object->setContent(0);
        $this->assertEquals(
            0,
            $this->object->sin(array(Number::TRIG_HYPERBOLIC))->value()
        );
    }

    /**
     * @covers Syngr\Number::sin()
     */
    public function testSinInverseHyperbolic()
    {
        $this->object->setContent(0);
        $this->assertEquals(
            0,
            $this->object->sin(array(Number::TRIG_INVERSE_HYPERBOLIC))->value()
        );
    }

    /**
     * @covers Syngr\Number::tan()
     */
    public function testTanArc()
    {
        $this->object->setContent(0);
        $this->assertEquals(
            0,
            $this->object->tan(array(Number::TRIG_ARC))->value()
        );
    }

    /**
     * @covers Syngr\Number::tan()
     */
    public function testTan()
    {
        $this->object->setContent(M_PI_4);
        $this->assertEquals(1, $this->object->tan()->value());
    }

    /**
     * @covers Syngr\Number::tan()
     */
    public function testTanHyperbolic()
    {
        $this->object->setContent(0);
        $this->assertEquals(
            0,
            $this->object->tan(array(Number::TRIG_HYPERBOLIC))->value()
        );
    }

    /**
     * @covers Syngr\Number::tan()
     */
    public function testTanInverseHyperbolic()
    {
        $this->object->setContent(0);
        $this->assertEquals(
            0,
            $this->object->tan(array(Number::TRIG_INVERSE_HYPERBOLIC))->value()
        );
    }

    /**
     * @covers Syngr\Number::is_finite()
     */
    public function testIs_finite()
    {
        $this->object->setContent(log(10));
        $this->assertTrue($this->object->is_finite());
    }

    /**
     * @covers Syngr\Number::is_finite()
     */
    public function testIs_finiteFailure()
    {
        $this->object->setContent(log(0));
        $this->assertFalse($this->object->is_finite());
    }

    /**
     * @covers Syngr\Number::is_infinite()
     */
    public function testIs_infinite()
    {
        $this->object->setContent(log(0));
        $this->assertTrue($this->object->is_infinite());
    }

    /**
     * @covers Syngr\Number::is_infinite()
     */
    public function testIs_infiniteFailure()
    {
        $this->object->setContent(log(10));
        $this->assertFalse($this->object->is_infinite());
    }

    /**
     * @covers Syngr\Number::is_nan()
     */
    public function testIs_nan()
    {
        $this->object->setContent(acos(8));
        $this->assertTrue($this->object->is_nan());
    }

    /**
     * @covers Syngr\Number::is_nan()
     */
    public function testIs_nanFailure()
    {
        $this->object->setContent(12.4);
        $this->assertFalse($this->object->is_nan());
    }

}
