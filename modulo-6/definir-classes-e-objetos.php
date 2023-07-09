<?php

class Post {
    public $likes = 0;
    public $comments = [];
    public $author;

    public function aumentarLike() {
        $this->likes++;
    }
}

$post1 = new Post();
$post1->aumentarLike();
$post1->aumentarLike();

$post2 = new Post();
$post2->aumentarLike();

echo $post1->likes;
echo "\n";
echo $post2->likes;