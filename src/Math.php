<?php

declare(strict_types=1);

namespace App;

final class Math
{
    private static function preAction(): void
    {
    }

    private static function postAction(): void
    {
    }

    public static function sum(int $a, int $b): int
    {
        self::preAction();

        $result = $a + $b;

        self::postAction($result);

        return $result;
    }
}


