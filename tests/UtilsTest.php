<?php
require_once('../vendor/autoload.php');

namespace tests;

use PHPUnit\Framework\TestCase;
use function App\reverse;

class UtilsTest extends TestCase
{
    public function testReverse() 
    {
        $this->assert(reverse('abc'), 'cba');
    }
}

