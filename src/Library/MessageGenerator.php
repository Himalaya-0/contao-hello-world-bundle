<?php

declare(strict_types=1);

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

        return 'Hello ' . $target;
    }
}