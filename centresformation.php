<!doctype html>
<html lang="fr">
  <head>
    <title>Centres de formation </title>
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
    <h2>Liens Google Maps des centres à Paris</h2>

    <a href="#75001">75001</a> | 
    <a href="#75002">75002</a> | 
    <a href="#75003">75003</a> | 
    <a href="#75004">75004</a> | 
    <a href="#75005">75005</a> | 
    <a href="#75006">75006</a> | 
    <a href="#75007">75007</a> | 
    <a href="#75008">75008</a> | 
    <a href="#75009">75009</a> | 
    <a href="#75010">75010</a> | 
    <a href="#75011">75011</a> | 
    <a href="#75012">75012</a> | 
    <a href="#75013">75013</a> | 
    <a href="#75014">75014</a> | 
    <a href="#75015">75015</a> | 
    <a href="#75016">75016</a> | 
    <a href="#75017">75017</a> | 
    <a href="#75018">75018</a> | 
    <a href="#75019">75019</a> | 
    <a href="#75020">75020</a>

    <?php

    $centres = json_decode(file_get_contents('centresformationparis.json'));
    // var_dump ($centres);
    ?>
    <p id="75001"><b>75001</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75001) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>


<p id="75002"><b>75002</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75002) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>

<p id="75003"><b>75003</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75003) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>

<p id="75004"><b>75004</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75004) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>
     <p id="75005"><b>75005</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75005) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>
     <p id="75006"><b>75006</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75006) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>
     <p id="75007"><b>75007</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75007) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>
     <p id="75008"><b>75008</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75008) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>
     <p id="75009"><b>75009</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75009) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>
     <p id="75010"><b>75010</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75010) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>
     <p id="75011"><b>75011</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75011) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>
     <p id="75012"><b>75012</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75012) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>
     <p id="75013"><b>75013</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75013) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>
     <p id="75014"><b>75014</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75014) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>
     <p id="75015"><b>75015</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75015) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>
     <p id="75016"><b>75016</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75016) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>
     <p id="75017"><b>75017</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75017) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>
     <p id="75018"><b>75018</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75018) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>
     <p id="75019"><b>75019</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75019) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>
     <p id="75020"><b>75020</b></p>
    <?php
    foreach ($centres as $key => $centre) {
          
        
        if($centre->fields->arro == 75020) {
        ?>
            <ul>
                <li>index n°<?= $key ?> <?= $centre->fields->arro ?> : <a href="https://www.google.fr/maps/search/centre+<?= $centre->fields->adresse_complete?>+<?= $centre->fields->arro ?>/" target="_blank"><?= $centre->fields->adresse_complete ?></a></li>
            </ul>
        <?php    }
        }

    ?>


    </main>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>