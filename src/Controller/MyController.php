<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MyController
{
    public function practice42($_locale, $year, $slug){
        return new Response(
            '<html><body>'
                    . '<p>' . $_locale . '</p>'
                    . '<p>' . $year . '</p>'
                    . '<p>' . $slug . '</p>'
                    . '</body></html>'
        );
    }
}