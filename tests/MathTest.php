<?php

declare(strict_types=1);

namespace Tests;

use App\Math;
use PHPUnit\Framework\TestCase;

final class MathTest extends TestCase
{
    public function testSum()
    {
        $result = Math::sum(2, 2);

        $this->assertEquals(4, $result);
    }
}

