<?php
use PHPUnit\Framework\TestCase;
use Wouerner\Pontos as Pontos;

final class PontosTest extends TestCase
{
    public function testPontosExec(): void
    {
        $pontos = new Pontos();
        $this->assertEquals(
            5,
            $pontos->exec(1, 4, 1, 5)
        );
    }
}
