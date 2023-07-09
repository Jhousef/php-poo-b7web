<?php 
// PRIVATE - valores de atribultos só pode ser alterada pela class mãe.
// PROTECTED - Pode ser alterada por as class herdada.
class Post {
    private int $id;
    private int $likes = 0;

    protected function setId($i){
        $this->id = $i;
    }
    public function getId(){
        return $this->id;
    }

    protected function setLikes($l){
        $this->likes = $l;
    }
    public function getLikes(){
        return $this->likes;
    }

}

class Foto extends Post {
    private $url;

    public function __construct($i)
    {
        $this->setId($i);
        $this->setLikes(77);
    }

    // PODEMOS RECRIAR MÉTODOS E PROPRIEDADES HERDADOS.
    public function setLikes($l)
    {
        echo 'Chamou';
    }

    public function setUrl($u) {
        $this->url = $u;
    }
    public function getUrl() {
        return $this->url;
    }
}

class Texto extends Post {
    private $body;

}

$foto = new Foto(20);
$foto->setUrl('abc');

echo "FOTO: #".$foto->getId()." - ".$foto->getLikes()." Likes - ".$foto->getUrl();