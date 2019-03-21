<?php
/**
 * Created by PhpStorm.
 * User: Faldy
 * Date: 10/03/2019
 * Time: 15:30
 */

namespace App\Traits;


use Goutte\Client;
use Symfony\Component\BrowserKit\CookieJar;
use Symfony\Component\BrowserKit\History;

trait WithGoutte
{
    /** @var Client */
    protected $goutteClient;

    public function setUpGoutte(array $server = [], History $history = null, CookieJar $cookieJar = null)
    {
        $this->goutteClient = new Client($server, $history, $cookieJar);
    }
}