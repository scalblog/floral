<h1>Test de lecture fichier CSV</h1>


<?php

require_once('functions.php');
getAllLines();

$row = 1;
if (($handle = fopen("tips.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        
        if ($data[2] == 'Female' && $data[3] == 'Yes') {
            echo( $data[0] * 2 . " instead of ". $data[0]. " because she's smoking.<br />\n");
        }

        $row++;
        
        
    }
    fclose($handle);
}
?>
