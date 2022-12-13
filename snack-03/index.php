<?php 
/*
Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
*/

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [ 
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
//all'array post associa il primo giro di ciclo e alla prima dimensione nella posizione dove si trovano le date associamo alla variabile $date
// entra "=>" e dove ti trovi ora per richiamarti uso la variabile $array
foreach ($posts as $date => $array) {
    //stampa le date in maiuscolo
    echo "<br><b># $date</b><br>";
    //cicla sull'array all'interno di date e associa alla variabile $key le chiavi dell'array.
    // => entra nella chiave e associa il valore di ogni chiave a $value.
    foreach ($array as $key => $value) {
        // stampa il value title , value author e value text sottoforma di elementi di una lista.
        echo "<li>$value[title]</li>" . "<li>$value[author]</li>" . "<li>$value[text]</li>";
    }
}

?>
