<?php

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;

class BaseContext extends MinkContext implements SnippetAcceptingContext
{
    /**
     * @return void
     */
    public function __construct()
    {
        //
    }
}
