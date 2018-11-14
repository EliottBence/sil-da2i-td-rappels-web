<?php
require('connect.php');
require('getblock.php');

include('person.php');
include('director.php');
include('actor.php');
include('movie.php');

//films
$stmt = $bdd->prepare("SELECT * FROM movie ORDER BY title ASC");
$stmt->execute();
$movies = $stmt->fetchAll();
getblock('head.php', $res); ?>
<body>
	<?php
   getblock("header.php") ?>
	<main>
  <?php  echo "<h2> Liste des films : </h2>";
    echo "<ul>";
    foreach($movies as $movie) {
          $url = 'movieOld.php?film='.$movie['id'];
          echo '<a href="'.$url.'"><li>'.$movie['title'].'</li></a><br/>';
    }
    echo "</ul>";

//Réalisateurs

		$director = new director();
		$directors = $director->getAllDirectors();
    echo "<h2> Liste des réalisateurs : </h2>";
    echo "<ul>";
    foreach($directors as $director) {
          $stmt = $bdd->prepare("SELECT * FROM person WHERE id =".$director['idPerson']);
          $stmt->execute();
          $dir = $stmt->fetch();
          $url = 'directorOld.php?id='.$dir['id'];
          echo '<a href="'.$url.'"><li>'.$dir['lastname'].' '.$dir['firstname'].'</li></a><br/>';
    }
    echo "</ul>";

//Acteurs
$stmt = $bdd->prepare("SELECT * FROM MovieHasPerson WHERE role='actor'");
$stmt->execute();
$actors = $stmt->fetchAll();
echo "<h2> Liste des acteurs : </h2>";
echo "<ul>";
foreach($actors as $actor) {
      $stmt = $bdd->prepare("SELECT * FROM person WHERE id =".$actor['idPerson']);
      $stmt->execute();
      $act = $stmt->fetch();
      $url = 'actorOld.php?id='.$act['id'];
      echo '<a href="'.$url.'"><li>'.$act['lastname'].' '.$act['firstname'].'</li></a><br/>';
}
echo "</ul>";


?>











	</main>
	<?php getblock("footer.php") ?>
</body>
</html>
