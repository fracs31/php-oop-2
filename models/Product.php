<?php
//Classe "Prodotto"
class Product {
    protected $img; //immagine
    protected $name; //nome
    protected $price; //prezzo
    protected $category; //categoria
    //Metodo costruttore
    public function __construct($_img, $_name, $_price, $_category) {
        $this->img = $_img; //immagine
        $this->name = $_name; //nome
        $this->price = $_price; //prezzo
        $this->category = $_category; //categoria
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
    //Metodo che ritorna la categoria del prodotto
    public function getCategory() {
        return $this->category; //restituisco la categoria
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
    //Metodo per impostare la categoria
    public function setCategory($_category) {
        $this->category = $_category; //imposto la categoria
    }
}
?>