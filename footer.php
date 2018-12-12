<footer>
  <p>Site développé par Eliott BENCE dans le cadre d'un projet de Licence Professionnelle</p>
</footer>
<script>
$( document ).ajaxStart(function() {
  $('.loader').fadeIn();
});
$( document ).ajaxStop(function() {
  $('.loader').fadeOut();
});

$(document).ready(function() {
  //$( "aside" ).hide(2000);
  $('h2').on('click', function(){
    $('ul .'+ $(this).attr('class')).slideToggle('slow');
  });


/*
  $('#load').on('click', function(){
    $("#load").load("faq.php #faq");
  })
*/
$('#load').on('click', function(){
  $.ajax({
    method: "GET",
    url: "faq.php",
    dataType : 'html'
  }).done(function(faq){
      $("#load").parent().append(faq);
  });
})



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
</body>
</html>
