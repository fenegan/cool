<?php

require_once('Cool/BaseController.php');
require_once('Model/PostManager.php');

class MainController extends BaseController
{
    public function homeAction()
    {
        $manager = new PostManager();
        $posts = $manager->getAllPosts();
        
        $data = [
            'username' => 'Puck',
            'posts' => $posts
        ];
        
        $response = $this->render('home.html.twig', $data);

        return $response;
    }

    public function contactAction()
    {
        return $this->render('contact.html.twig');
    }

    public function addArticleAction()
    {
        $manager = new PostManager();
        $posts = $manager->addPosts();
        
        $data = [
            'posts' => $posts
        ];
        
        global $twig;
        $template = $twig->load('post.html.twig');
        $response = $template->render($data);

        return $response;
    }
}
