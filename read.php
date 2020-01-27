<?php
include ('server.php');
$afficher = "SELECT * FROM hiking where 1";
$resultat = $conn->query($afficher);

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
      <?php include ("server.php")?>
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>
      <?php while ($infos = $resultat->fetch_assoc() ) {
          global $conn;
          global $dbname;
          $id = $infos['id'];
          echo "<tr><td><a href ='update.php?id=$id'>".utf8_encode($infos['name']).'</td><td>'.utf8_encode($infos['difficulty']).'</td><td>'.$infos['distance'].'</td></tr>';

      }?>
    </table>
  </body>
</html>