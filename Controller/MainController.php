<?php

require_once('Cool/BaseController.php');
require_once('Model/PostManager.php');
require_once ('Model/CommentManager.php');

class MainController extends BaseController
{
    public function homeAction()
    {
        $manager = new PostManager();
        $posts = $manager->getAllPosts();
        
        $data = [
            'posts' => $posts
        ];
        
        return $this->render('home.html.twig', $data);
    }
    
    public function articleAction()
    {
        $postManager = new PostManager();
        $post = $postManager->getPostById(intval($_GET['id']));
        $commentsManager = new CommentManager();
        $comments = $commentsManager->getAllComments(intval($_GET['id']));
        $data = [
            'article'   => $post,
            'comments'  => $comments
        ];
        
        return $this->render('article.html.twig', $data);
        
    }

    public function contactAction()
    {
        return $this->render('contact.html.twig');
    }
}
