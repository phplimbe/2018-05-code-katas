<?php
declare(strict_types=1);

namespace PHPLimburg\K03_AvengersTickets;

//use PHPLimburg\K03_AvengersTickets\ClerkSolution as Clerk;

final class ClerkTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test constructor.
     * @dataProvider queuesProvider
     * @param bool $expected
     * @param int ...$queue
     */
    public function testCases(bool $expected, int ...$queue)
    {
        $this->assertEquals($expected, (new Clerk())->sellTickets($queue));
    }

    public function queuesProvider()
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
