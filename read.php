<?php

function get_shops(){

    global $db;

    $req = $db->query("SELECT * FROM boutiques");

    $results = array();

    while ($rows = $req->fetchObject()){
        $results[] = $rows;
    }

    return $results;
}

function get_shop(){

    global $db;
    
    $req = $db->query("
        SELECT  boutiques.id, 
                boutiques.clef, 
                boutiques.site,
                boutiques.responsive,
                boutiques.contact,
                boutiques.notes
        FROM boutiques
                WHERE boutiques.id = '{$_GET['id']}'
        "
    );

    $result = $req->fetchObject();
    
    return $result;

}