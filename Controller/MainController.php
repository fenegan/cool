<?php

namespace Controller;

use Cool\BaseController;

class MainController extends BaseController
{
    public function home()
    {
        return $this->render('home.html.twig');
    }
}
