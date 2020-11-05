<?php

namespace Himalaya\ContaoHelloWorldBundle\Module;

use Contao\Module;
use Contao\BackendTemplate;

use Patchwork\Utf8;

use Himalaya\ContaoHelloWorldBundle\Library\MessageGenerator;

class HelloWorldModule extends Module
{
    /**
     * @var string
     */
    protected $strTemplate = 'mod_helloWorld';

    /**
     * Displays a wildcard in the back end.
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $template = new BackendTemplate('be_wildcard');

            $template->wildcard = '### ' . Utf8::strtoupper($GLOBALS['TL_LANG']['FMD']['helloWorld'][0]) . ' ###';
            $template->title = $this->headline;
            $template->id = $this->id;
            $template->link = $this->name;
            $template->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $template->parse();
        }

        return parent::generate();
    }

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