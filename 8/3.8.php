<?php
$team = array(
 
  array('id_team' => '4','name' => 'AC/DC','alias' => 'ac-dc','country' => 'Австралия','content' => '','date' => '1973','style' => 'хард-блюз-рок','path' => 'assets/teams/acdc.jpg','note' => NULL),
 
);

$album = array(

  array('id_album' => '8','name' => 'The Razors Edge','alias' => 'the-razors-edge','country' => 'Австралия','content' => '','date' => '1990','path' => 'assets/albums/the-razors-edge.jpg','note' => NULL,'id_team' => '4'),
 
);

print_r($album);
?>