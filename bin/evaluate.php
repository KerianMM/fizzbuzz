#!/usr/bin/php
<?php

use Kerianmm\FizzBuzz\FizzBuzz;
use Kerianmm\FizzBuzz\InvalidFizzBuzzNumberException;

require __DIR__ . '/../vendor/autoload.php';

$number = (int) ($argv[1] ?? throw new InvalidFizzBuzzNumberException());
if ($number < 1) {
    throw new InvalidFizzBuzzNumberException();
}

/** @var positive-int $number */
echo sprintf(PHP_EOL.'%d matched %s'.PHP_EOL, $number, (new FizzBuzz($number))->evaluateFizzBuzzEligibility());
