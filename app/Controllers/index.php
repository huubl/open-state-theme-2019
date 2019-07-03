<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Index extends Controller
{
    public function agenda_evenement()
    {
        return get_field('agenda_evenement');
    }

    public function agenda_tijdstip()
    {
        return get_field('agenda_tijdstip');
    }

    public function agenda_locatie()
    {
        return get_field('agenda_locatie');
    }

    public function agenda_inschrijfformulier_url()
    {
        return get_field('agenda_inschrijfformulier_url');
    }
}