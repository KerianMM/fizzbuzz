<?php

namespace Kerianmm\FizzBuzz\Tests;

use Kerianmm\FizzBuzz\FizzBuzz;
use Kerianmm\FizzBuzz\InvalidFizzBuzzNumberException;
use PHPUnit\Framework\TestCase;

final class FizzBuzzUnitTest extends TestCase
{
    public function testFizz(): void
    {
        self::assertSame(FizzBuzz::FIZZ, (new FizzBuzz(3))->evaluateFizzBuzzEligibility());
    }

    public function testFizzBuzz(): void
    {
        self::assertSame(FizzBuzz::FIZZ_BUZZ, (new FizzBuzz(15))->evaluateFizzBuzzEligibility());
    }

    public function testBuzz(): void
    {
        self::assertSame(FizzBuzz::BUZZ, (new FizzBuzz(5))->evaluateFizzBuzzEligibility());
    }

    public function testNotFizzBuzz(): void
    {
        self::assertSame(7, (new FizzBuzz(7))->evaluateFizzBuzzEligibility());
    }

    public function testNotSupportedNumber(): void
    {
        self::expectException(InvalidFizzBuzzNumberException::class);

        new FizzBuzz(0);
    }
}
