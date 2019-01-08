jQuery(document).ready(function(){
  $('.sidenav').sidenav();
  $('.collapsible').collapsible();
  $('.dropdown-trigger').dropdown({
    hover: true,
    coverTrigger: false,
    constrainWidth: false,
  });
});
