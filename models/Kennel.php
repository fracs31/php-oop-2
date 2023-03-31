<?php
require_once __DIR__ . "/Product.php"; //richiedo la classe Product
//Classe "Cuccia"
class Kennel extends Product {
    private $material; //materiale
    private $color; //colore
    private $weigth; //peso
    private $heigth; //altezza
    private $width; //larghezza
    private $depth; //profondità
    //Metodo costruttore
    public function __construct($_img, $_name, $_price, $_category, $_material, $_color, $_weigth, $_heigth, $_width, $_depth) {
        parent::__construct($_img, $_name, $_price, $_category); //metodo costruttore del genitore
        $this->material = $_material; //materiale
        $this->color = $_color; //colore
        $this->weight = $_weigth; //peso
        $this->heigth = $_heigth; //altezza
        $this->width = $_width; //larghezza
        $this->depth = $_depth; //profondità
    }
    //Metodo che restituisce il materiale della cuccia
    public function getMaterial() {
        return $this->material; //restituisco il materiale
    }
    //Metodo che restituisce il colore della cuccia
    public function getColor() {
        return $this->color; //restituisco il colore
    }
    //Metodo che restituisce il peso della cuccia
    public function getWeigth() {
        return $this->weigth; //restituisco il peso
    }
    //Metodo che restituisce l'altezza della cuccia
    public function getHeight() {
        return $this->heigth; //restituisco l'altezza
    }
    //Metodo che restituisce la larghezza della cuccia
    public function getWidth() {
        return $this->width; //restituisco la larghezza
    }
    //Metodo che restituisce la profondità della cuccia
    public function getDepth() {
        return $this->depth; //restituisco la profondità
    }
    //Metodo per impostare il materiale della cuccia
    public function setMaterial($_material) {
        $this->material = $_material; //imposto il materiale
    }
    //Metodo per impostare il colore della cuccia
    public function setColor($_color) {
        $this->color = $_color; //imposto il colore
    }
    //Metodo per impostare il peso della cuccia
    public function setWeigth($_weigth) {
        $this->weigth = $_weigth; //imposto il peso
    }
    //Metodo per impostare l'altezza della cuccia
    public function setHeigth($_heigth) {
        $this->heigth = $_heigth; //imposto l'altezza
    }
    //Metodo per impostare la larghezza della cuccia
    public function setWidth($_width) {
        $this->width = $_width; //imposto la larghezza
    }
    //Metodo per impostare la profondità della cuccia
    public function setDepth($_depth) {
        $this->depth = $_depth; //imposto la profondità
    }
}
?>