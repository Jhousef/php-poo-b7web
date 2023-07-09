<?php

class Post {
    public int $likes = 0;  // NÃO IRÁ ACEITAR OUTRO TIPO QUE NÃO SEJA INTEIRO.
    public array $comments = [];  // NÃO IRÁ ACEITAR OUTRO TIPO QUE NÃO SEJA ARRAY.
    public string $author;  // EXCETO A PRÉ DEFINIÇÃO STRING, PORQUE SE COLOCAR UM NUMERO ELA FARÁ DE CONTA QUE É UM NUMERO STRING.

    public function aumentarLike() {
        $this->likes++;
    }
}

$post1 = new Post();
// $post1->likes = 'muniz';     NÃO IRÁ ACEITAR OUTRO TIPO QUE NÃO SEJA INTEIRO.
$post1->likes = 5;
$post1->comments = ['muniz', 'costa', 54];
$post1->author = 5;

$post2 = new Post();

echo $post1->likes;
echo "\n";
echo $post2->likes;