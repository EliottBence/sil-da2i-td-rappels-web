<?php
require('connect.php');
require('getblock.php');
require('personModel.php');

$id = $_GET['id'];
$person = new Person();
$res = $person->getBaseInfos($id);

getblock('head.php') ?>
<body>
	<?php getblock("header.php") ?>
<main>
	<?php getblock("infosactor.php", $res) ?>
</main>
	<?php getblock("footer.php") ?>
</body>
</html>
