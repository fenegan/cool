<?php

require_once('Model/PostManager.php');

class MainController 
{
    public function homeAction()
    {
        $manager = new PostManager();
        $posts = $manager->getAllPosts();
        
        $data = [
            'username' => 'Puck',
            'posts' => $posts
        ];
        
        global $twig;
        $template = $twig->load('home.html.twig');
        $response = $template->render($data);

        return $response;
    }

    public function contactAction()
    {
        global $twig;
        $template = $twig->load('contact.html.twig');
        $response = $template->render();

        return $response;
    }
}
