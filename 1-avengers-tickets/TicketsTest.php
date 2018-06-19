<?php
declare(strict_types=1);
require "program.php";

final class TicketsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test constructor.
     * @dataProvider provider
     * @param bool $expected
     * @param int ...$peopleInLine
     */
    public function testCases(bool $expected, ...$peopleInLine)
    {
        $this->assertEquals($expected, sellTickets($peopleInLine));
    }

    public function provider()
    {
        return [
            [true, 25, 25, 50, 50],
            [false, 25, 100],
            [true, 25, 25],
            [false, 50, 100, 100],
            [false, 25, 25, 25, 25, 25, 100, 100],
            [true, 25, 25, 25, 25, 50, 100, 50],
            [false, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50],
            [false, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100],
            [true, 25, 50, 25, 100, 25, 25, 50, 100, 25, 50, 25, 100],
            [false, 25, 25, 25, 100, 25, 50, 25, 100, 25, 25, 50, 100, 50, 50],
            [false, 25, 25, 25, 25, 25, 25, 25, 50, 50, 50, 100, 100, 100, 100],

        ];
    }
}
