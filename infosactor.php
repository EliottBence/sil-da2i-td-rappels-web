<?php
require('connect.php');

			$query = $bdd->prepare("SELECT idPicture FROM personHasPicture WHERE idPerson=".$data['id']);
			$query->execute();
			$idPicture = $query->fetch();
			$query = $bdd->prepare("SELECT * FROM picture WHERE id=".$idPicture['idPicture']);
			$query->execute();
			$picture = $query->fetch();
?>

<h1> <?php echo $data['firstname'].' '.$data['lastname'] ?></h1>
		<article>
		<aside>
			<figure>
			  <img src="<?php echo $picture['path'] ?>" alt=<?php echo $picture['legend'] ?>></img>
			  <figcaption><?php echo $picture['legend'] ?></figcaption>
			</figure>
		</aside>
			<section>
				<h2>Actor</h2>
				<p><?php echo $data['firstname'].' '.$data['lastname'] ?>, (born the <?php echo $data['birthDate'] ?>).</p>

				<p>
          <?php echo $data['biography'] ?>
 </p>
</section>
