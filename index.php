<?php

//creazione classe (si crea con prima lettera maiuscola)
class Movie {
    //creazione variabili, dette 'attributi', di una classe
    public $nome;
    public $genere;
};

//generazione istanze della classe creata sopra

$film_uno = new Movie();
$film_due = new Movie();

// Per accedere agli attributi di un'istanza si usa l’operatore= ->
$film_uno = new Movie();
$film_uno->nome = "Django";
$film_uno->genere = "azione";

$film_due = new Movie();
$film_due->nome = "Lo Hobbit";
$film_due->genere = "fantasy";


