<?php

/*
 * This file is part of ContaoHelloWorldBundle.
 *
 * (c) Himalaya
 *
 * @license LGPL-3.0-or-later
 */

namespace Himalaya\ContaoHelloWorldBundle\Tests;

use Himalaya\ContaoHelloWorldBundle\ContaoHelloWorldBundle;
use PHPUnit\Framework\TestCase;

class ContaoHelloWorldBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoHelloWorldBundle();

        $this->assertInstanceOf('Himalaya\ContaoHelloWorldBundle\ContaoHelloWorldBundle', $bundle);
    }
}
