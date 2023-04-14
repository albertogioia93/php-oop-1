<?php

// //creazione classe (si crea con prima lettera maiuscola)
// class Movie {
//     //creazione variabili, dette 'attributi', di una classe
//     public $nome;
//     public $genere;
// };

// //generazione istanze della classe creata sopra

// $film_uno = new Movie();
// $film_due = new Movie();

// // Per accedere agli attributi di un'istanza si usa l’operatore= ->
// $film_uno = new Movie();
// $film_uno->nome = "Django";
// $film_uno->genere = "azione";

// $film_due = new Movie();
// $film_due->nome = "Lo Hobbit";
// $film_due->genere = "fantasy";

class Movie {
    public $nome;
    public $genere;

    // creazione costruttore all'interno della classe
    public function __construct($nome, $genere) {
        $this->nome = $nome;
        $this->genere = $genere;
    }
};

$film_uno = new Movie("Django", "azione");
$film_due = new Movie("Lo Hobbit", "fantasy");

var_dump($film_uno);
var_dump($film_due);




