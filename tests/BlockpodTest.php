<?php
/**
 * Tests for BlockPod
 */

use PHPUnit\Framework\TestCase;
use Blockpod\Blockpod;

class BlockpodTest extends TestCase {
    private Blockpod $instance;

    protected function setUp(): void {
        $this->instance = new Blockpod(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockpod::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
