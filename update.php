<?php
include ('server.php');
global $conn;
global $dbname;
$conn->select_db($dbname);

$name = $_POST['name'];
$distance = $_POST['distance'];
$difficulty = utf8_decode($_POST['difficulty']);
$duration = $_POST['duration'];
$height_difference = $_POST['height_difference'];

$id  = $_GET['id'];

$id2 = $_POST['id'];


if (isset($id2)) {
    $selectBG = "SELECT * FROM hiking WHERE id = $id2";
    $result = $conn->query($selectBG);

    $updateBD = " UPDATE hiking SET name = '$name', distance = '$distance', difficulty = '$difficulty', 
 duration = '$duration', height_difference = '$height_difference'
    WHERE id = $id2";
    $result2 = $conn->query($updateBD);
}








    //$name = $_POST['name'];
    //$distance = $_POST['distance'];
    //$difficulty = utf8_decode($_POST['difficulty']);
    //$duration = $_POST['duration'];
    //$height_difference = $_POST['height_difference'];


   //$updateBD = " UPDATE hiking SET name = '$name', distance = '$distance', difficulty = '$difficulty', duration = '$duration', height_difference = '$height_difference'
//HERE id = $id";



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="/php-pdo/read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="update.php" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>
		
		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="">
		</div>
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="hidden" name="machin" value="truc">
		<button type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>
