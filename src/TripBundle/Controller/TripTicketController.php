<?php

namespace TripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TripTicketController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
}
