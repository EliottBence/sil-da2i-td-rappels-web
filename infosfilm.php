<article>
									<h1> <?php echo $data['title'] ?></h1>
<?php
	include('connect.php');
	$stmt = $bdd->prepare("SELECT idPerson FROM MovieHasPerson WHERE idMovie=".$data['id']);
	$stmt->execute();
	$ids = $stmt->fetchAll();
	$mainactors = '';
	foreach($ids as $person) {
				$query = $bdd->prepare("SELECT lastname, firstname FROM person WHERE id=".$person['idPerson']);
				$query->execute();
				$res = $query->fetchAll();
				$mainactor .= $res[0]['lastname'].' '.$res[0]['firstname'].', ';
	}
	$stmt = $bdd->prepare("SELECT * FROM movie WHERE id=".$data['id']);
	$stmt->execute();
	$result = $stmt->fetch();
	$synopsis = $result['synopsis'];

	$rating = $result['rating'];

?>
		<div>
		<aside>
			<figure>
			  <img src="silentHill.jpg" alt="image d'affiche du film Silent Hill"></img>
			  <figcaption>image d'affiche du film Silent Hill</figcaption>
			</figure>
			<a style="color:black" id="load" href="#"> Charger la FAQ</a>
			<div class="loader" style="display:none"></div>

		</aside>
			<section>
				<p><?php echo $data['title'] ?> was revealed on <time datetime="<?php echo $data['releaseDate'] ?>"><?php echo $data['releaseDate'] ?></time>.</p>
				<h2>Main actors :</h2>
				<p> The main actors are <?php echo $mainactor ?> ...</p>
				<h2>Synopsis : </h2>
				<p>
					<?php echo $synopsis?> <br/>
					 Ce film est noté <meter min="0" max="5" value="<?php echo $rating?>"></meter>
 </p>

			</section>
		</div> <!-- permet de regrouper la section et le aside -->
			<section class="full-width">
								<h1>Présentation des acteurs : </h1><br/>
								<?php getblock('frame.php', $data); ?>
			</section>
			</article>
