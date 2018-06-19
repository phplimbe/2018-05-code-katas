<?php
namespace PHPLimburg\K02_PokerHandFlush;

final class PokerHand
{
    private $cards;

    public function __construct(array $cards)
    {
        // type hint all cards as string
        $this->cards = \array_map(function (string $i) { return $i; }, $cards);
    }

    function isFlush(): bool
    {
        return false; // write the solution here
    }
}
