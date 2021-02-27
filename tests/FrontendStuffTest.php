<?php

class FrontendStuffTest extends PHPUnit_Extensions_Selenium2TestCase {

    public function setup()
    {
        $this->setBrowserUrl('http://localhost:8000');
        $this->setBrowser('chrome');
        $this->setDesiredCapabilities(['chromeOptions' => ['w3c' => false]]);
        // phpunit-selenium does not support w3c mode yet
    }

    public function testCanSeeCorrectStringOnMainPage()
    {
        $this->url('');
        $this->assertContains('Add a new category' ,  $this->source());
    }
}