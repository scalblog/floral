<!doctype html>
<html lang="fr">
  <head>
    <title>Votre fleuriste</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=News+Cycle|Signika" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
  </head>
  <body>
    <main>
    <h2>Liens Google Maps des fleuristes à Paris</h2>
    <?php

    $fleuristes = json_decode(file_get_contents('fleuristesparis.json'));
    // var_dump ($fleuristes);

    // if($fleuristes[0]->fields->arro == 75004) {
    //     echo ('75004');
    //  }
    // else {echo 'another one';}

    foreach ($fleuristes as $key => $fleuriste) {
        // echo ($fleuriste->fields->arro);

        ?>

        <ul>
            <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
        </ul>

        <?php

    }

    ?>

    <!-- <h4>75001</h4> -->


    
    </main>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>