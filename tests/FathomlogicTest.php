<?php
/**
 * Tests for FathomLogic
 */

use PHPUnit\Framework\TestCase;
use Fathomlogic\Fathomlogic;

class FathomlogicTest extends TestCase {
    private Fathomlogic $instance;

    protected function setUp(): void {
        $this->instance = new Fathomlogic(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Fathomlogic::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
