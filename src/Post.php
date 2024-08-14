<?php
class Post
{
    public PDO $db;

    public function __construct()
    {
        $this->db = DB::connect();
    }

    public function createPost($post): void
    {
        $stmt = $this->db->prepare("INSERT INTO posts (post, created_at) VALUES (:post, NOW())");
        $stmt->bindParam(':post', $post);
        $stmt->execute();
    }

    public function createUser($chat_id): void
    {
        $stmt = $this->db->prepare("INSERT INTO users (chat_id) VALUES (:chat_id)");
        $stmt->bindParam(':chat_id', $chat_id);
        $stmt->execute();
    }

    public function getChatId()
    {
        return $this->db->query("SELECT chat_id from users")->fetchAll();
    }

    public function getAllPosts(): false|array
    {
        return $this->db->query("SELECT * from posts")->fetchAll();
    }


}