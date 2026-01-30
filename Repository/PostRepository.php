<?php

class PostRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::get();
    }

    public function findLatest(int $limit = 10): array
    {
        // Find the latest posts
    }

    public function insertUserPost(string $user, string $title, string $content): void
    {
        // Insert a new post
    }
}
