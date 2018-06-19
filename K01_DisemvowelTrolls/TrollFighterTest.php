<?php
declare(strict_types=1);
namespace PHPLimburg\K01_DisemvowelTrolls;

//use PHPLimburg\K01_DisemvowelTrolls\TrollFighterSolution as TrollFighter;

final class TrollFighterTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider commentsProvider
     * @param string $comment
     * @param string $expectation
     * @return void
     */
    public function testEquals(string $comment, string $expectation)
    {
        //$this->assertEquals($expectation, TrollFighter::disemvowel($comment));
        $this->assertEquals($expectation, TrollFighter::disemvowel($comment));
    }

    public function commentsProvider()
    {
        return [
            ["This website is for losers LOL!", "Ths wbst s fr lsrs LL!"],
            ["No offense, but your writing is among the worst I've ever read", "N ffns, bt yr wrtng s mng th wrst 'v vr rd"],
            ["What are you, a communist?", "Wht r y,  cmmnst?"]
        ];
    }
}
