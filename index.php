<?php
require('connect.php');
require('getblock.php');
require_once('movieModel.php');
require_once('directorModel.php');
require_once('actorModel.php');

//films
getblock('head.php', $res); ?>
<body>
	<?php
   getblock("header.php") ?>
	<main>
  <?php  echo "<h2> Liste des films : </h2>";
    echo "<ul>";
		$movie = new Movie();
		$movies = $movie->getAllMovies();
    foreach($movies as $movie) {
          $url = 'movieController.php?film='.$movie['id'];
          echo '<a href="'.$url.'"><li>'.$movie['title'].'</li></a><br/>';
    }
    echo "</ul>";

//Réalisateurs
		$director = new Director();
		$directors = $director->getAllDirectors();
    echo "<h2> Liste des réalisateurs : </h2>";
    echo "<ul>";
		$person = new Person();
    foreach($directors as $director) {
			$dir = $person->getBaseInfos($director['idPerson']);
      $url = 'directorController.php?id='.$dir['id'];
      echo '<a href="'.$url.'"><li>'.$dir['lastname'].' '.$director['firstname'].'</li></a><br/>';
    }
    echo "</ul>";

		//getAllDirectors
		$actor = new Actor();
		$actors = $actor->getAllActors();
		echo "<h2> Liste des acteurs : </h2>";
		echo "<ul>";
		$person = new Person();
		foreach($actors as $actor) {
			$act = $person->getBaseInfos($actor['idPerson']);
			$url = 'actorController.php?id='.$act['id'];
			echo '<a href="'.$url.'"><li>'.$act['lastname'].' '.$actor['firstname'].'</li></a><br/>';
		}
		echo "</ul>";



?>
	</main>
	<?php getblock("footer.php") ?>
</body>
</html>
