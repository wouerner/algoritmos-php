<?php
use PHPUnit\Framework\TestCase;
use Wouerner\Sort as Sort;

final class SortTest extends TestCase
{
    public function testEquals(): void
    {
        $sort = new Sort();
        $this->assertEquals(
            [1, 1, 4, 5],
            $sort->insert([1, 4, 1, 5])
        );
    }
}
