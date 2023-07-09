<?php

class Post {
    public int $id;
    public int $likes = 0;
    public array $comments = [];
    public string $author; 

    public function SetAuthor($n){
        if(strlen($n) >= 3){ // Se o tamanho for menor que 3 não imprimirar o que está na variavel $n
            $this->author = ucfirst($n);
        }
    }
    public function GetAuthor(){
        return $this->author ?? 'visitante'; // Se for menor que 3 imprimirar visitante.
    }

}

$post1 = new Post(1);

$post2 = new Post(2); 

echo $post1->SetAuthor('Jh');
echo $post1->GetAuthor();
echo "\n";
echo $post2->likes;