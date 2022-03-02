<?php

namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MyController extends AbstractController
{
    public function date(): Response
    {
        return $this->render('twig/date.html.twig',	array(
            'myDate'	=>	new DateTime('2022-02-02'),
        ));
    }
}