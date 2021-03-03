<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\TennisGame;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class TennisGameTest extends TestCase
{
    /**
     * @test
     **/
    public function test_del_Estado_inicial()
    {

        $tennis = new TennisGame("Ivan", "Maider");
        $output = $tennis->getScore();
        $this->assertEquals("Love all",$output);
    }


}
