<?php
require('connect.php');
require('getblock.php');
require('personModel.php');

$id = $_GET['id'];
$person = new Person();
$res = $person->getBaseInfos($id);
?>
	<h1> FAQ : </h1>
	<dl id="faq">
	    <dt>Est-ce qu'il y a des meufs bonnes dans ce film ?</dt>
	    <dd>
	        <dl class="reponses">
	            <dt>Radha Mitchell</dt>
	        </dl>
	    </dd>
			<dt> Elle est célib cette folle ?</dt>
		 <dd>
			 <dl class="reponses">
						 <dt>Inchallah cousin</dt>
				 </dl>
		 </dd>
	</dl>
<style>

dl dd {
		display: none;
	}

dl dd.persistent{
		display: block!important;
	}
</style>
