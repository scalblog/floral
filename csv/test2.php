<h1>Test de lecture de fichier XML</h1>


<?php

if (file_exists('pom.xml')) {
    $xml = simplexml_load_file('pom.xml');

    // print_r($xml->build->plugins);

    $plugins = $xml->build->plugins;
    $goals = $xml->build->plugins->plugin->executions->execution;
    $groupId = $xml->build->plugins->groupId;

    // var_dump($plugins);


    foreach($plugins as $goal) {
        // print_r($goal);
        // var_dump($plugins);
        // var_dump($groupId);
        // var_dump($goal->groupId);
        // print_r($goal->groupId);
    }
} else {
    exit('Echec lors de l\'ouverture du fichier pom.xml.');
}


?>
