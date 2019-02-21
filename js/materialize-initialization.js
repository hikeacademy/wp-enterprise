jQuery(document).ready(function(){
  $('.sidenav').sidenav();
  $('.collapsible').collapsible();
  $('.desktop-dropdown-trigger').dropdown({
    hover: true,
    coverTrigger: false,
    constrainWidth: false,
  });
  $('.apply-select').formSelect();
  $('.contact-select').formSelect();
});
