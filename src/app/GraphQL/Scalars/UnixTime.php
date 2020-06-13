<?php

namespace App\GraphQL\Scalars;

use Carbon\Carbon;
use Nuwave\Lighthouse\Schema\Types\Scalars\DateScalar;

/**
 * Class UnixTime
 * @package App\GraphQL\Scalars
 */
class UnixTime extends DateScalar
{
    /**
     * @param Carbon $carbon
     * @return string
     */
    protected function format(Carbon $carbon): string
    {
        return $carbon->unix();
    }

    /**
     * @param mixed $value
     * @return Carbon
     */
    protected function parse($value): Carbon
    {
        return Carbon::createFromFormat(Carbon::DEFAULT_TO_STRING_FORMAT, $value);
    }
}
