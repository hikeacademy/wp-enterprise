jQuery(document).ready(function(){
  $('.sidenav').sidenav();
  $('.collapsible').collapsible();
  $('.desktop-dropdown-trigger').dropdown({
    hover: true,
    coverTrigger: false,
    constrainWidth: false,
  });
<<<<<<< HEAD
  $('.apply-select').dropdown();
  $('.contact-select').dropdown();
=======
  $('.apply-select').formSelect();
  $('.contact-select').formSelect();
>>>>>>> samuel
});
