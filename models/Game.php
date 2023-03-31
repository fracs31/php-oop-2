<?php
//Classe "Gioco"
class Game extends Product {
    private $material; //materiale
    private $weigth; //peso
    private $heigth; //altezza
    private $width; //larghezza
    private $depth; //profondità
    //Metodo costruttore
    public function __construct($_img, $_name, $_price, $_category, $_material, $_weigth,$_heigth, $_width, $_depth) {
        parent::__construct($_img, $_name, $_price, $_category); //metodo costruttore del genitore
        $this->material = $_material; //materiale
        $this->weight = $_weigth; //peso
        $this->heigth = $_heigth; //altezza
        $this->width = $_width; //larghezza
        $this->depth = $_depth; //profondità
    }
    //Metodo che restituisce il materiale del gioco
    public function getMaterial() {
        return $this->material; //restituisco il materiale
    }
    //Metodo che restituisce il peso del gioco
    public function getWeigth() {
        return $this->weigth; //restituisco il peso
    }
    //Metodo che restituisce l'altezza del gioco
    public function getHeight() {
        return $this->heigth; //restituisco l'altezza
    }
    //Metodo che restituisce la larghezza del gioco
    public function getWidth() {
        return $this->width; //restituisco la larghezza
    }
    //Metodo che restituisce la profondità del gioco
    public function getDepth() {
        return $this->depth; //restituisco la profondità
    }
    //Metodo per impostare il materiale del gioco
    public function setMaterial($_material) {
        $this->material = $_material; //imposto il materiale
    }
    //Metodo per impostare il peso del gioco
    public function setWeigth($_weigth) {
        $this->weigth = $_weigth; //imposto il peso
    }
    //Metodo per impostare l'altezza del gioco
    public function setHeigth($_heigth) {
        $this->heigth = $_heigth; //imposto l'altezza
    }
    //Metodo per impostare la larghezza del gioco
    public function setWidth($_width) {
        $this->width = $_width; //imposto la larghezza
    }
    //Metodo per impostare la profondità del gioco
    public function setDepth($_depth) {
        $this->depth = $_depth; //imposto la profondità
    }
}
?>