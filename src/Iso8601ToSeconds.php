<?php

declare(strict_types=1);

namespace JoanFabregat\Iso8601ToSeconds;

use DateInterval;
use InvalidArgumentException;
use Throwable;

/**
 * Class Iso8601ToSeconds converts ISO 8601 durations to seconds.
 *
 * @author  Joan Fabrégat <joan@codeinc.co>
 * @package JoanFabregat\Iso8601ToSeconds
 */
final class Iso8601ToSeconds
{
    /**
     * Generates a random token.
     *
     * @param DateInterval|string $iso8601 ISO 8601 duration or a DateInterval instance
     * @return int
     * @throws InvalidArgumentException If the ISO 8601 duration is invalid
     */
    public static function convert(string|DateInterval $iso8601): int
    {
        if (!$iso8601 instanceof DateInterval) {
            try {
                $iso8601 = new DateInterval($iso8601);
            } catch (Throwable $e) {
                throw new InvalidArgumentException('Invalid ISO 8601 duration.', previous: $e);
            }
        }

        return ($iso8601->d * 24 * 60 * 60) +
            ($iso8601->h * 60 * 60) +
            ($iso8601->i * 60) +
            $iso8601->s;
    }
}