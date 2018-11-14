<?php
require('connect.php');
require('getblock.php');

$id = $_GET['id'];
$stmt = $bdd->prepare("SELECT * FROM person WHERE id=".$id);
$stmt->execute();
$res = $stmt->fetch();

getblock('head.php') ?>
<body>
	<?php getblock("header.php") ?>
<main>
	<?php getblock("infosdirector.php", $res) ?>
</main>
	<?php getblock("footer.php") ?>
</body>
</html>
