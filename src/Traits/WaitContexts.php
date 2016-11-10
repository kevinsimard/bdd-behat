<?php

namespace App\Traits;

trait WaitContexts
{
    /**
     * @When /^(?:|I )wait for ajax page to load$/
     *
     * @return void
     */
    public function waitForAjaxPageToLoad()
    {
        $this->getSession()->wait(2000, "(jQuery.active === 0)");
    }
}
