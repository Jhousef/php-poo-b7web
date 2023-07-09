<?php

class Post {
    public int $id;
    public int $likes = 0;
    public array $comments = [];
    public string $author; 

    public function __construct($i)
    {
        $this->id = $i;
        // consultar bancos de dados para pegar informações do POST.
        $this->likes = 12 * $i;
    }

    public function aumentarLike() {
        echo 'teste';
        $this->likes++;
    }
}

$post1 = new Post(1);

$post2 = new Post(2); 

echo $post1->likes;
echo "\n";
echo $post2->likes;