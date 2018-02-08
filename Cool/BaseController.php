<?php

class BaseController
{
    protected function render($view, $data = [])
    {
        global $twig;
        $template = $twig->load($view);
        $response = $template->render($data);

        return $response;
    }
}
