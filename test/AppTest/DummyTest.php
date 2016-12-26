<?php
/**
 * Created by PhpStorm.
 * User: tacsiazuma
 * Date: 2016.12.26.
 * Time: 12:18
 */

namespace AppTest;


use App\Dummy;

class DummyTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Dummy
     */
    private $underTest;

    public function setUp() {
        $this->underTest = new Dummy();
    }

    /**
     * @test
     */
    public function it_returns_string() {
        // GIVEN
        // WHEN
        $actual = $this->underTest->comboBreaker();
        // THEN
        $this->assertEquals("c-c-c-combo breaker", $actual);
    }

}