<?php

declare(strict_types=1);

namespace JoanFabregat\tests;

use DateInterval;
use InvalidArgumentException;
use JoanFabregat\Iso8601ToSeconds\Iso8601ToSeconds;
use PHPUnit\Framework\TestCase;

final class Iso8601ToSecondsTest extends TestCase
{
    public function testConvert(): void
    {
        $this->assertEquals(86400, Iso8601ToSeconds::convert('P1D'));
        $this->assertEquals(86400, Iso8601ToSeconds::convert(new DateInterval('P1D')));
        $this->assertEquals(86400, Iso8601ToSeconds::convert('P1DT0S'));
        $this->assertEquals(86400, Iso8601ToSeconds::convert('P1DT0H0M0S'));
    }

    public function testConvertFailure(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->assertEquals(86400, Iso8601ToSeconds::convert('this is not a valid ISO 8601 duration'));
    }
}