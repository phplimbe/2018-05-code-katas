<?php
declare(strict_types=1);

namespace PHPLimburg\K02_PokerHandFlush;

//use PHPLimburg\K02_PokerHandFlush\PokerHandSolution as PokerHand;

final class PokerHandTest extends \PHPUnit\Framework\TestCase
{
    /**
     * testEquals
     * @dataProvider handsProvider
     * @param bool $expected
     * @param string[] $cards
     * @return void
     */
    public function testEquals(bool $expected, string ...$cards)
    {
        $this->assertEquals($expected, (new PokerHand($cards))->isFlush());
    }

    public function handsProvider()
    {
        return [
            [true, 'AS', '3S', '9S', 'KS', '4S'],
            [true, '10D', 'QD', '7D', 'KD', '5D'],
            [true, '10H', 'QH', '7H', 'KH', '5H'],
            [true, '10C', 'QC', '7C', 'KC', '5C'],
            [false, 'AD', '4S', '7H', 'KS', '10S'],
            [false, '10D', '4S', '7H', 'KC', '5S'],
        ];
    }
}
