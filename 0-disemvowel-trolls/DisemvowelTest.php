<?php
declare(strict_types=1);
require "program.php";

final class DisemvowelTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider commentsProvider
     * @param string $comment
     * @param string $expectation
     * @return void
     */
    public function testEquals(string $comment, string $expectation)
    {
        $this->assertEquals($expectation, disemvowel($comment));
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
