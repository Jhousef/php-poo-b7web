<?php

class Post {
    public $likes = 0;
    public $comments = [];
    public $author;
}

$post1 = new Post();
$post1->likes = 3;

$post2 = new Post();
$post2->likes = 50;

echo $post1->likes;
echo "\n";
echo $post2->likes;