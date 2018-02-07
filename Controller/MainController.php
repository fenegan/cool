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
        
        ob_start();
        require_once('views/home.php');
        $response = ob_get_contents();
        ob_end_clean();

        return $response;
    }

    public function contactAction()
    {
        ob_start();
        require_once('views/contact.php');
        $response = ob_get_contents();
        ob_end_clean();

        return $response;
    }
}
