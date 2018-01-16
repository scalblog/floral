<h1>Test de lecture fichier CSV</h1>


<?php

// get the current URL
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $actual_link;

require_once('functions.php');
$lines = getAllLines();
foreach ($lines as $line) : ?>

    <p><?= $line->sex; ?></p>
<?php endforeach;

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


if($lines[0]->sex == 'Male') {
   
    echo ("tentative de connexion");
    require_once('functions.php')
    setNewTip(1);
}
else { echo ("Une erreur est survenue : condition non remplie.");};

?>
