<?php 
/*
Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
// for ($i=0; $i < count($db); $i++) { 
//     echo("<div style='background-color: grey;'>{$db}</div>")
// }
foreach ($db as $type => $array) {

    echo "<br><b># $type</b><br>";
    echo "<div></div>";
    foreach ($array as $key) {
        echo "<div class='$type'>$key[name] $key[lastname] </div>";
        // var_dump($key['name']);
    }
    
}

?>
<style>
    .teachers{
        background-color: lightgrey;
        width: 10%;
    }
    .pm{
        background-color: lightgreen;
        width: 10%;

    }
</style>
