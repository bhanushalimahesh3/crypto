<?php

namespace Spatie\Crypto\Exceptions;

use Exception;

class CouldNotDecryptData extends Exception
{
    public static function make(): self
    {
        return new self("Could not decrypt the data.");
    }
}
