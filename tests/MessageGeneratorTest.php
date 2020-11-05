<?php

declare(strict_types=1);

/*
 * This file is part of ContaoHelloWorldBundle.
 *
 * (c) Himalaya
 *
 * @license LGPL-3.0-or-later
 */

namespace Himalaya\ContaoHelloWorlddBundle\Tests;

use Himalaya\ContaoHelloWorldBundle\Library\MessageGenerator;
use PHPUnit\Framework\TestCase;

class MessageGeneratorTest extends TestCase
{
    public function testCanSayHelloToWorld()
    {
        $messageGenerator = new MessageGenerator();

        $message = $messageGenerator->sayHelloTo('World');

        $this->assertSame('Hello World', $message);
    }

    public function testCanNotSayHelloToEmptyTarget()
    {
        $messageGenerator = new MessageGenerator();

        $this->expectException(\InvalidArgumentException::class);

        $message = $messageGenerator->sayHelloTo('');
    }
}
