<?php

namespace Kerianmm\FizzBuzz;

final readonly class FizzBuzz
{
    public const FIZZ_BUZZ = 'FizzBuzz';
    public const FIZZ      = 'Fizz';
    public const BUZZ      = 'Buzz';

    public function __construct(private int $number)
    {
        if ($number < 1) {
            throw new InvalidFizzBuzzNumberException('Please, pass a positive integer number to evaluate.');
        }
    }

    private function isFizz(): bool
    {
        return 0 === ($this->number % 3);
    }

    private function isBuzz(): bool
    {
        return 0 === ($this->number % 5);
    }

    private function isFizzBuzz(): bool
    {
//        I prefer my solution, but commented solution could be more performant on big volume
//        return 0 === ($this->number % 15);
        return $this->isFizz() && $this->isBuzz();
    }

    public function evaluateFizzBuzzEligibility(): string|int
    {
        return match (true) {
            $this->isFizzBuzz() => self::FIZZ_BUZZ,
            $this->isFizz()     => self::FIZZ,
            $this->isBuzz()     => self::BUZZ,
            default             => $this->number,
        };
    }
}