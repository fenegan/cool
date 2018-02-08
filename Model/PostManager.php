<?php

require_once('Cool/DBManager.php');
require_once('CommentsManager.php');

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

    public function addPost($title, $content)
    {
        $dbm = DBManager::getInstance();
        $pdo = $dbm->getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $pdo->prepare("INSERT INTO posts (id, title, content) VALUES (NULL, :title, :content)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);

        $stmt->execute();
    }
    
    public function getPostById($id)
    {
        $dbm = DBManager::getInstance();
        $pdo = $dbm->getPdo();
        
        $result = $pdo->prepare("SELECT * FROM posts WHERE id = :id");
        $result->execute([':id' => $id]);
        $post = $result->fetch();

        $commentsManager = new CommentsManager();
        $comments = $commentsManager->getCommentsByPost($id, $pdo);
        
        return [$post, $comments];
    }
}
