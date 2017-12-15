<?php
    include 'read.php';

    $shops = get_shops();

?>    
    
    
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
    <link rel="stylesheet" type="text/css" href="css/formstyle.css" media="screen" />
  </head>
  <body>
    <main>
    <h2>Liens Google Maps des fleuristes à Paris</h2>
    <?php

    $fleuristes = json_decode(file_get_contents('fleuristesparis.json'));
    // var_dump ($fleuristes);
    // var_dump ($shops);   notons qu ' il fonctionne

    ?>
        <p><b>75001</b></p>

        <table>
            <tbody>
            <?php
            foreach ($fleuristes as $key => $fleuriste) {
                
            ?>
            <form action="update.php" method="POST">
            <?php
            if($fleuriste->fields->arro == 75001) {
            ?>
                <tr>
                    <td>index n°<?= $key ?><input type="hidden" name="clef" value="<?= $key ?>" /></td>
                    <td><?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></td>
                    <td>Site web ?
                        <input type="radio" name="web" value="oui" id="wwwyes" /> <label for="wwwwyes">oui</label>
                        <input type="radio" name="web" value="non" id="wwwno" /> <label for="wwwno">non</label>
                        <input type="radio" name="web" value="maybe" id="wwwcheck" /> <label for="wwwcheck">à verifier</label>
                    </td>
                    <td> | Et site web responsive ? 
                        <input type="radio" name="responsive" value="oui" id="responsiveyes" /> <label for="responsiveyes">oui</label>
                        <input type="radio" name="responsive" value="non" id="responsiveno" /> <label for="responsiveno">non</label>
                        <input type="radio" name="responsive" value="maybe" id="responsivecheck" /> <label for="responsivecheck">à verifier</label>
                    </td>
                    
                    <!-- <td><label for="contact">| Contact</label> : <input type="text" name="contact" id="contact" /></td> -->
                    <td>Contact  :  <input type="text" name="contact" /></td>
                    <td><label for="notes">| Notes </label> : <input type="text" name="notes" id="notes" placeholder="pas fait"/></td>
                    <td><i class="fa fa-floppy-o" aria-hidden="true"></i> <input type="submit" value="enregistrer" /></td>
                </tr>
            <?php    }
            }
            
            ?>

            </form>
            
            </tbody>
        
        
        </table>


        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            




            
            if($fleuriste->fields->arro == 75001) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>


    <p><b>75002</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75002) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>

    <p><b>75003</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75003) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>

    <p><b>75004</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75004) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>
        <p><b>75005</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75005) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>
        <p><b>75006</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75006) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>
        <p><b>75007</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75007) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>
        <p><b>75008</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75008) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>
        <p><b>75009</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75009) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>
        <p><b>75010</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75010) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>
        <p><b>75011</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75011) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>
        <p><b>75012</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75012) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>
        <p><b>75013</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75013) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>
        <p><b>75014</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75014) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>
        <p><b>75015</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75015) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>
        <p><b>75016</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75016) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>
        <p><b>75017</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75017) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>
        <p><b>75018</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75018) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>
        <p><b>75019</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75019) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
                </ul>
            <?php    }
            }

        ?>
        <p><b>75020</b></p>
        <?php
        foreach ($fleuristes as $key => $fleuriste) {
            
            
            if($fleuriste->fields->arro == 75020) {
            ?>
                <ul>
                    <li>index n°<?= $key ?> <?= $fleuriste->fields->arro ?> : <a href="https://www.google.fr/maps/search/fleuriste+<?= $fleuriste->fields->adresse_complete?>+<?= $fleuriste->fields->arro ?>/" target="_blank"><?= $fleuriste->fields->adresse_complete ?></a></li>
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