<?php

/*
 * This file is part of [package name].
 *
 * (c) Himalaya
 *
 * @license LGPL-3.0-or-later
 */

namespace Himalaya\ContaoHelloWorldBundle\Module;

use Haste\Frontend\AbstractFrontendModule;
use Himalaya\ContaoHelloWorldBundle\Library\MessageGenerator;

class HelloWorldModule extends AbstractFrontendModule
{
    /**
     * @var string
     */
    protected $strTemplate = 'mod_helloWorld';

    /**
     * {@inheritdoc}
     */
    protected function compile()
    {
        /** @var MessageGenerator $messageGenerator */
        $messageGenerator = \Contao\System::getContainer()->get(MessageGenerator::class);

        $this->Template->message = $messageGenerator->sayHelloTo('World');
    }
}
