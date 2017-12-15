<?php

include 'connect.php';

    global $db;

    $c = array(
        'clef'      => $_POST['clef'],
        'site'     => $_POST['web'],
        'responsive'   => $_POST['responsive'],
        'contact'   => $_POST['contact'],
        'notes'   => $_POST['notes'],
        'id'   => $_POST['clef']
    );

    // $sql = "INSERT INTO comments(name,email,comment,post_id,date) VALUES(:name, :email, :comment, :post_id, NOW())";
    
    $sql = "UPDATE boutiques SET clef = :clef, site = :site, responsive = :responsive, contact = :contact, notes = :notes WHERE id = :id";
/*
    $req = $db->prepare($sql);
    
    $req->execute($c);
*/

var_dump($_POST);
