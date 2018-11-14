<?php
	include('connect.php');
	$stmt = $bdd->prepare("SELECT idPerson FROM MovieHasPerson WHERE  role = 'actor' AND idMovie=".$data['id']);
	$stmt->execute();
	$ids = $stmt->fetchAll();
		foreach($ids as $person) {
			//var_dump($person['idPerson']);
				$query = $bdd->prepare("SELECT idPicture FROM personHasPicture WHERE idPerson=".$person['idPerson']);
				$query->execute();
				$idPictures = $query->fetchAll();
				foreach($idPictures as $idPicture){
					$query = $bdd->prepare("SELECT * FROM picture WHERE id=".$idPicture['idPicture']);
					$query->execute();
					$pictures = $query->fetch();
					//var_dump($pictures['legend']);
				echo'<figure class="frame">
					<img src="'.$pictures['path'].'" alt="'.$pictures['legend'].'" class="img-frame "> </img>
					<figcaption>'.$pictures['legend'].'</figcaption>
				</figure>';
				}
	}

	?>
