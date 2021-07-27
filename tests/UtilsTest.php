<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use function App\reverse;

class UtilsTest extends TestCase
{
    public function testReverse() 
    {
        $this->assertEquals(reverse('abc'), 'cba');
    }
}

