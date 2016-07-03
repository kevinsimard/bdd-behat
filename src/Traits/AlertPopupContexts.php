<?php

namespace App\Traits;

trait AlertPopupContexts
{
    /**
     * @When /^(?:|I )confirm the alert popup$/
     *
     * @return void
     */
    public function confirmTheAlertPopup()
    {
        $this->getSession()->getDriver()->getWebDriverSession()->accept_alert();
    }

    /**
     * @when /^(?:|I )cancel the alert popup$/
     */
    public function cancelTheAlertPopup()
    {
        $this->getSession()->getDriver()->getWebDriverSession()->dismiss_alert();
    }
}
