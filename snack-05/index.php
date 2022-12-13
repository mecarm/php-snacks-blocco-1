<?php 
/*
Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/
$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum rem inventore corrupti impedit eius obcaecati veritatis. Quidem aspernatur cupiditate saepe hic fugiat, debitis sequi illum, totam ipsa provident fuga odit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate quis vero vitae tenetur alias cum doloremque, perspiciatis ratione quo ullam maxime dicta fugit quae officiis nemo sed laborum possimus natus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam fuga doloribus ullam optio asperiores ad excepturi odit debitis totam nulla doloremque quae aspernatur, eveniet reprehenderit. Vero ea quidem ad nostrum?';

$newParagrafi = explode('.', $paragrafo);

foreach($newParagrafi as $paragrafi){
    echo "<p>$paragrafi</p>";
}
?>

