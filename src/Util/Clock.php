<?php
declare(strict_types=1);

namespace Forkrefactor\Ddd\Util;

use Forkrefactor\Ddd\Domain\Model\ValueObject\DateTimeValueObject;

class Clock
{
    private static $fakeNow;

    public static function fakeNow(DateTimeValueObject $datetime): void
    {
        self::$fakeNow = $datetime;
    }

    public static function now(): DateTimeValueObject
    {
        return self::$fakeNow ?? self::from('now');
    }

    public static function from(string $str): DateTimeValueObject
    {
        return DateTimeValueObject::from($str);
    }
}
