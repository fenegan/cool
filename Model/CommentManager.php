<?php

require_once('Cool/DBManager.php');

class CommentManager
{
    public function getCommentsByPost($id)
    {
        $dbm = DBManager::getInstance();
        $pdo = $dbm->getPdo();

        $result = $pdo->prepare("SELECT * FROM comments WHERE post_id = :id");
        $result->execute([':id' => $id]);
        $post = $result->fetchall();

        return $post;
    }
}
