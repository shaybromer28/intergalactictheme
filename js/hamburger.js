jQuery(document).ready(function(){
  jQuery( ".cross" ).hide();
  jQuery( ".menu" ).hide();
  jQuery( ".hamburger" ).click(function() {
  jQuery( ".menu" ).slideToggle( "slow", function() {
  jQuery( ".hamburger" ).hide();
  jQuery( ".cross" ).show();
  });
  });

  jQuery( ".cross" ).click(function() {
  jQuery( ".menu" ).slideToggle( "slow", function() {
  jQuery( ".cross" ).hide();
  jQuery( ".hamburger" ).show();
  });
  });
});
