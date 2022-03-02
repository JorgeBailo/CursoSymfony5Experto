<?php

namespace App\Twig;

use DateTime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class MyExtension extends AbstractExtension
{

    public function getFilters(): array
    {
        return array(
            new TwigFilter('tt', array($this, 'ttFilter')),
        );
    }

    public function ttFilter(DateTime $date): string
    {
        $interval = date_diff($date, new \DateTime());
        $message = "";

        if ($interval->s < 60) {
            $message = 'Ahora';
        }

        if ($interval->i >= 1 && $interval->i < 60) {
            $message = sprintf("Hace %d minutos", $interval->i);
        }

        if ($interval->h >= 1 && $interval->h < 24) {
            $message = sprintf("Hace %d horas", $interval->h);
        }

        if ($interval->d >= 1 && $interval->d < 30) {
            $message = sprintf("Hace %d días", $interval->d);
        }

        if ($interval->m >= 1 && $interval->m < 12) {
            $message = sprintf("Hace %d meses", $interval->m);
        }

        if ($interval->y >= 1) {
            $message = sprintf("Hace %d años", $interval->y);
        }

        return $message;
    }
}
