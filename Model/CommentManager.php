<?php

require_once('Cool/DBManager.php');

class CommentManager
{
    public function getCommentsByPost($id, $pdo)
    {
        $result = $pdo->prepare("SELECT * FROM comments WHERE post_id = :id");
        $result->execute([':id' => $id]);
        $comments = $result->fetchAll();

        return $comments;
    }
}
