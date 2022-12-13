<?php 
/*
Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/
$classe = [
    'alunno' =>
    [
        'nome' => 'Marco',
        'cognome' => 'Rossi',
        'voti' => [
            'inglese' => 7,
            'italiano' => 5,
            'matematica' => 8
        ]
    ],
    [
        'nome' => 'Luca',
        'cognome' => 'Padova',
        'voti' => [
            'inglese' => 7,
            'italiano' => 8,
            'matematica' => 4
        ]
    ],
    [
        'nome' => 'Valerio',
        'cognome' => 'Capone',
        'voti' => [
            'inglese' => 3,
            'italiano' => 2,
            'matematica' => 10
        ]
    ],
    [
        'nome' => 'Giovanni',
        'cognome' => 'Piccolo',
        'voti' => [
            'inglese' => 4,
            'italiano' => 9,
            'matematica' => 7
        ]
    ],
];
foreach($classe as $alunno){
    $average = array_sum($alunno['voti'])/count($alunno['voti']);
    $average = number_format($average, 2);
    echo "<div>$alunno[nome] $alunno[cognome] <br> Media voto: $average<br><br></div>";
    // var_dump($alunno[]);
}
?>