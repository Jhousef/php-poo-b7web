<?php 
class Post {
    private int $id;
    private int $likes = 0;

    public function setId($i){
        $this->id = $i;
    }
    public function getId(){
        return $this->id;
    }

    public function setLikes($l){
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
$foto->setLikes(12);
$foto->setUrl('abc');

echo "FOTO: #".$foto->getId()." - ".$foto->getLikes()." Likes - ".$foto->getUrl();