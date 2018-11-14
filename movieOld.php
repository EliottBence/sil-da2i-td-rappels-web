<?php
require('connect.php');
require('getblock.php');

$id = $_GET['film'];
$stmt = $bdd->prepare("SELECT * FROM movie WHERE id=".$id);
$stmt->execute();
$res = $stmt->fetch();


 	   getblock('head.php', $res) ?>
<body>

	<?php
   getblock("header.php") ?>
	<main>
		<?php getblock('infosfilm.php', $res);?>
	</main>
	<?php getblock("footer.php") ?>
</body>
</html>
