<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PontosTest extends TestCase
{

    public function testBlank(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $pontos = new Pontos();

        $this->assertEquals(
            5,
            $pontos->exec(0, 4, 1, 5)
        );
    }

    public function testPontosExec(): void
    {
        $pontos = new Pontos();
        $this->assertEquals(
            5,
            $pontos->exec(1, 4, 1, 5)
        );
    }
}
