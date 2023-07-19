<?php

// funzione per generare password
function randomPassword($length, $characters)
{
    // preparo un array per la password
    $password = [];

    // creo un ciclo che metta tanti caratteri quanti scelti dall'utente
    for ($i = 0; count($password) < $length; $i++) {
        $shuffled_characters = str_shuffle($characters);

        // trasformo la stringa mescolata in un array
        $shuffled_characters = str_split($shuffled_characters);

        // se il primo elemento dell'array mescolato non è presente nell'array password lo aggiungo
        if (!in_array($shuffled_characters[0], $password)) $password[] = $shuffled_characters[0];
    }

    // trasformo l'array in stringa
    $password = implode($password);


    // mescolo i caratteri all'interno della stringa
    return $password;
};
