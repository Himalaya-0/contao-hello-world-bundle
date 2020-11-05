<?php

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
     * @inheritdoc
     */
    protected function compile()
    {
        /** @var MessageGenerator $messageGenerator */
        $messageGenerator = \Contao\System::getContainer()->get(MessageGenerator::class);

        $this->Template->message = $messageGenerator->sayHelloTo('World');
    }
}