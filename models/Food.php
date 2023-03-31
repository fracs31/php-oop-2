<?php
//Classe "Cibo"
class Food extends Product {
    private $grams; //grammi
    private $kcal; //chilocalorie
    private $fat; //grassi
    private $carbo; //carboidrati
    private $protein; //proteine
    //Metodo costruttore
    public function __construct($_img, $_name, $_price, $_category, $_grams, $_kcal, $_fat, $_carbo, $_protein) {
        parent::__construct($_img, $_name, $_price, $_category); //metodo costruttore del genitore
        $this->$grams = $_grams; //grammi
        $this->$kcal = $_kcal; //chilocalorie
        $this->$fat = $_fat; //grassi
        $this->$carbo = $_carbo; //carboidrati
        $this->$protein = $_protein; //proteine
    }
    //Metodo che restituisce i grammi del cibo
    public function getGrams() {
        return $this->grams; //restituisco i grammi
    }
    //Metodo che restituisce le chilocalorie del cibo
    public function getKcal() {
        return $this->kcal; //restituisco le chilocalorie
    }
    //Metodo che restituisce i grassi del cibo
    public function getFat() {
        return $this->fat; //restituisco i grassi
    }
    //Metodo che restituisce i carboidrati del cibo
    public function getCarbo() {
        return $this->carbo; //restituisco i carboidrati
    }
    //Metodo che restituisce le proteine del cibo
    public function getProtein() {
        return $this->protein; //restituisco le proteine
    }
    //Metodo per impostare i grammi del cibo
    public function setGrams($_grams) {
        $this->grams = $_grams; //imposto i grammi
    }
    //Metodo per impostare le chilocalorie del cibo
    public function setKcal($_kcal) {
        $this->kcal = $_kcal; //imposto le chilocalorie
    }
    //Metodo per impostare i grassi del cibo
    public function setFat($_fat) {
        $this->fat = $_fat; //imposto i grassi
    }
    //Metodo per impostare i carboidrati del cibo
    public function setCarbo($_carbo) {
        $this->carbo = $_carbo; //imposto i carboidrati
    }
    //Metodo per impostare le proteine del cibo
    public function setProtein($_protein) {
        $this->protein = $_protein; //imposto le proteine
    }
}
?>