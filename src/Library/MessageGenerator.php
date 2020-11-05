<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) Himalaya
 *
 * @license LGPL-3.0-or-later
 */

namespace Himalaya\ContaoHelloWorldBundle\Library;

use InvalidArgumentException;

class MessageGenerator
{
    /**
     * @throws InvalidArgumentException
     */
    public function sayHelloTo(string $target): string
    {
        if (empty($target)) {
            throw new InvalidArgumentException('Target must not be empty.');
        }

        return 'Hello '.$target;
    }
}
