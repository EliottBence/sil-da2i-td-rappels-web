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
	    <dt>Salut ça va tout le monde ?</dt>
	    <dd>
	      <dl>
	          <dt>Oui et toi ? :)) </dt>
	      </dl>
	    </dd>

	    <dt>Est-ce qu'il y a des meufs bonnes dans ce film ?</dt>
	    <dd>Ouaip</dd>

	    <dt> Je suis une question</dt>
	    <dd>Je suis une réponse</dd>

	    <dt>Le PHP c'est quoi ?</dt>
	    <dd>La meilleure matière du monde (mettez moi la moyenne svp monsieur j'en ai besoin pour rattraper le java) </dd>
	  </dl>

<style>
		dl dd {
				display: none;
			}

		dl dd.persistent{
				display: block!important;
			}
</style>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

<script>

$(document).ready(function() {

$("dt").on('mouseenter',function(event){
			$('dd').each(function(){
				$(this).hide();
			});
      $(this).next("dd").toggle();
      event.stopPropagation();
    });
});
$("dt").on('click', function(){
	console.log($(this).hasClass('persistent'));
	if($(this).next("dd").hasClass('persistent')){
		$(this).next("dd").removeClass("persistent");
	} else {
		$(this).next("dd").addClass("persistent");
	}
});
</script>
