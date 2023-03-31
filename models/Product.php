<?php
//Classe "Prodotto"
class Product {
    protected $img; //immagine
    protected $name; //nome
    protected $price; //prezzo
    //Metodo costruttore
    public function __construct($_img, $_name, $_price) {
        $this->img = $_img; //immagine
        $this->name = $_name; //nome
        $this->price = $_price; //prezzo
    }
    //Metodo che ritorna l'immagine del prodotto
    public function getImg() {
        return $this->img; //restituisco l'immagine
    }
    //Metodo che ritorna il nome del prodotto
    public function getName() {
        return $this->name; //restituisco il nome
    }
    //Metodo che ritorna il prezzo del prodotto
    public function getPrice() {
        return $this->img; //restituisco il prezzo
    }
    //Metodo per impostare l'immagine
    public function setImg($_img) {
        $this->img = $_img; //imposto l'immagine
    }
    //Metodo per impostare il nome
    public function setName($_name) {
        $this->name = $_name; //imposto il nome
    }
    //Metodo per impostare il prezzo
    public function setPrice($_price) {
        $this->price = $_price; //imposto il prezzo
    }
}
?>