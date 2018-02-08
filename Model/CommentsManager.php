<?php

require_once('Cool/DBManager.php');
require_once('PostManager.php');

class CommentsManager
{
    public function getAllComments()
    {
        $dbm = DBManager::getInstance();
        $pdo = $dbm->getPdo();
        
        $result = $pdo->query("SELECT * FROM posts");
        $posts = $result->fetchAll();
        
        return $posts;
    }
    
    public function getCommentsByPost($id, $pdo)
    {
        $result = $pdo->prepare("SELECT * FROM comments WHERE post_id = :id");
        $result->execute([':id' => $id]);
        $comments = $result->fetchAll();
        
        return $comments;
    }
}
