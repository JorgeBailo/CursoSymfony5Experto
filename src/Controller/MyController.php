<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MyController
{
    public function secretUrl(){
        return new Response('<html><body>Url Secret</body></html>');
    }
}