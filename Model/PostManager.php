<?php

require_once('Model/DBManager.php');

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
}
