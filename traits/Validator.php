<?php
//Validator
trait Validator {
    //Funzione per verificare il tipo di animale inserito
    public function checkAnimal($animal) {
        //Se l'animale inserito non è un cane e un gatto
        if ($animal !== "Dog" && $animal !== "Cat") {
            throw new Exception("L'animale inserito '$animal' non è né un cane né un gatto"); //lancio un'eccezione
        }
    }
}
?>