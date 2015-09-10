<?php

use Silex\WebTestCase;

class controllersTest extends WebTestCase
{
    public function createApplication()
    {
        $app = require __DIR__.'/../src/app.php';
        require __DIR__.'/../config/dev.php';
        require __DIR__.'/../src/controllers.php';
        $app['session.test'] = true;

        return $this->app = $app;
    }

    public function testGetRoot()
    {
        $client = $this->createClient();
        $client->followRedirects(true);
        $client->request('GET', '/');
        $this->assertTrue($client->getResponse()->isOk());
    }
}
