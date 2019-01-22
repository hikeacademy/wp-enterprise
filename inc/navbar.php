
<?php
function get_navbar($args = NULL) {
  if (is_startup_page()) {
    $btnLink = 'contato';
    $btnText = 'Contatar vendas';
  } else {
    $btnLink = 'inscreva-se';
    $btnText = 'Inscreva-se'; }

  ?>

  <ul id="student-content" class="dropdown-content">
    <li><a href="aluno">Como funciona</a></li>
    <li class="hide"><a href="#!">Comprar o curso</a></li>
    <li><a href="inscreva-se">Bolsa de estudos</a></li>
    <li><a href="aluno/#faq">Dúvidas</a></li>
  </ul>

  <ul id="startup-content" class="dropdown-content">
    <li><a href="empresa">Como funciona</a></li>
    <li><a href="contato">Contatar vendas</a></li>
    <li><a href="empresa/#faq">Dúvidas</a></li>
  </ul>

<?php echo (!wp_is_mobile() and $args['landing-page']) ? '<div class="navbar-fixed">' : NULL ; ?>
    <nav class="navbar">
      <div class="container">
        <div class="nav-wrapper">
          <a href="<?php echo get_home_url(); ?>" class="brand-logo"><img src="<?php echo get_template_directory_uri() . '/images/navbar/hike-logo.png'; ?>" alt="HikeAcademy"></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <?php
              if (is_front_page() or get_page_template_slug() == 'page-apply.php' or get_page_template_slug() == 'page-contact.php') { ?>
                  <li><a class='desktop-dropdown-trigger' href='#!' data-target='student-content'>Para alunos</a></li>
                  <li><a class='desktop-dropdown-trigger' href='#!' data-target='startup-content'>Para empresas</a></li>
                <?php
              } else { ?>
                  <li><a href="<?php echo $btnLink ?>" class="btn"><?php echo $btnText ?> &#8594;</a></li>
                <?php
              } ?>

        </div>
      </div>
    </nav>
<?php
  echo (!wp_is_mobile() and $args['landing-page']) ? '</div>' : NULL ; ?>

  <ul class="sidenav" id="mobile-demo">
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header">Para alunos</a>
          <div class="collapsible-body">
            <ul class="sidenav-dropdown">
              <li><a href="aluno">Como funciona</a></li>
              <li class="hide"><a href="#!">Comprar o curso</a></li>
              <li><a href="inscreva-se">Bolsa de estudos</a></li>
              <li><a href="aluno/#faq">Dúvidas</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header">Para empresas</a>
          <div class="collapsible-body">
            <ul class="sidenav-dropdown">
              <li><a href="empresa">Como funciona</a></li>
              <li><a href="contato">Contatar vendas</a></li>
              <li><a href="empresa/#faq">Dúvidas</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
  </ul>

<?php } ?>
