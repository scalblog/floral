<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<!-- Modal Email Succes-->
<div class="modal fade" id="emailSuccessFR" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Mentions légales</h4>
      </div>
      <div class="modal-body">
        <img src="img/check.gif" alt="succès">
        <p>Votre message a été envoyé avec succès.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Email failed-->
<div class="modal fade" id="emailFailFR" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Mentions légales</h4>
      </div>
      <div class="modal-body">
        <img src="img/error.gif" alt="erreur">
        <p>Votre message n'a pas pu être envoyé.</p>
        <p>Vous pouvez écrire directement à cette adresse email : pascalgeay [arobase] gmail .com</p>
        <p>A très bientôt.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<?php

var_dump($_POST);

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);


if (!empty($message) && !empty($email) && !empty($name)) {

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sMessage = 'Contact : '.$email.'<br /><br />message : <br />'.$message;
        
        $headers = 'From: '.$email. "\r\n" .
                   'Reply-To: '.$email. "\r\n";
        
        mail('pascalgeay@gmail.com', 'Nouveau message p-g.fr', $sMessage, $headers);
        mail('pascalgeay@free.fr', 'Nouveau message p-g.fr', $sMessage, $headers);
        mail('pascalgeay@yahoo.fr', 'Nouveau message p-g.fr', $sMessage, $headers);
        // par securite un log
        file_put_contents(
            'log_mail.txt', 
            $_POST['name']."\n\n".
            $sMessage."\n\n".
            $_POST['email']."\n\n----\n\n", 
            FILE_APPEND
        );
    

    echo "<script type='text/javascript'>
        $(document).ready(function(){
        $('#emailSuccessFR').modal('show');
        });
        </script>";
    }
}
else {
    echo "<script type='text/javascript'>
        $(document).ready(function(){
        $('#emailFailFR').modal('show');
        });
        </script>";
}
header('Location: https://pascal-geay.fr');
exit();


?>
</body>