<?php

require_once('Cool/DBManager.php');

class PostManager
{
    public function getAllPosts()
    {
        $dbm = DBManager::getInstance();
        $pdo = $dbm->getPdo();
        
        $result = $pdo->query("SELECT * FROM posts");
        $posts = $result->fetchAll();
        
        return $posts;
    }
    
    public function getPostById($id)
    {
        $dbm = DBManager::getInstance();
        $pdo = $dbm->getPdo();
        
        $result = $pdo->prepare("SELECT * FROM posts WHERE id = :id");
        $result->execute([':id' => $id]);
        $post = $result->fetch();
        
        return $post;
    }
}
