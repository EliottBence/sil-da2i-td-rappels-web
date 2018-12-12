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
  <?php  echo "<h2 class='movie'> Liste des films : </h2>";
    echo "<ul class='movie' >";
		$movie = new Movie();
		$movies = $movie->getAllMovies();
    foreach($movies as $movie) {
          $url = 'movieController.php?film='.$movie['id'];
          echo '<a class="movie" href="'.$url.'"><li class="movie">'.$movie['title'].'</li></a><br/>';
    }
    echo "</ul>";

//Réalisateurs
		$director = new Director();
		$directors = $director->getAllDirectors();
    echo "<h2 class='real'> Liste des réalisateurs : </h2>";
    echo "<ul class='real'>";
		$person = new Person();
    foreach($directors as $director) {
			$dir = $person->getBaseInfos($director['idPerson']);
      $url = 'directorController.php?id='.$dir['id'];
      echo '<a class="real" href="'.$url.'"><li class="real">'.$dir['lastname'].' '.$director['firstname'].'</li></a><br/>';
    }
    echo "</ul>";

		//getAllDirectors
		$actor = new Actor();
		$actors = $actor->getAllActors();
		echo "<h2 class='actors' > Liste des acteurs : </h2>";
		echo "<ul class='actors'>";
		$person = new Person();
		foreach($actors as $actor) {
			$act = $person->getBaseInfos($actor['idPerson']);
			$url = 'actorController.php?id='.$act['id'];
			echo '<a class="actors" href="'.$url.'"><li class="actors">'.$act['lastname'].' '.$actor['firstname'].'</li></a><br/>';
		}
		echo "</ul>";
?>
<a style="color: black" href="faq.php"> Accéder à la FAQ </a>

	</main>
	<?php getblock("footer.php") ?>
</body>
</html>
