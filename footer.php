<footer>
  <p>Site développé par Eliott BENCE dans le cadre d'un projet de Licence Professionnelle</p>
</footer>
<script>
$(document).ready(function() {
  //$( "aside" ).hide(2000);

  $('h2').on('click', function(){
    $('ul .'+ $(this).attr('class')).slideToggle('slow');
  });

$("dt").on('mouseenter',function(event){
      console.log('ttrdtrdtrd');
      $(this).next("dd").toggle();
      event.stopPropagation();
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
      $("#load").append(faq);
  });
})

});




</script>
</body>
</html>
