<?php
/**
 * The sidebar containing the main widget area
 *
 */
?>

<section class="sidebar">

  <header class="sidebar__header">
    <div class="logo">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/joaquim_rodrigues.png" alt="Joaquim Rodrigues">
    </div>
    <nav class="nav">
      <a rel="nofollow" href="#sobre__mim">Sobre mim</a>
      <a rel="nofollow" href="#portfolio">Portfolio</a>
    </nav>  <!-- nav -->
  </header>



  <section class="sidebar__dados">
    <a rel="nofollow" href="tel:<?php the_field("telefone",5); ?>" class="sidebar__dados--whats">
      <?php the_field("telefone"); ?>
    </a>
    <a rel="nofollow" href="skype:<?php the_field("skype",5); ?>" class="sidebar__dados--skype">
      <?php the_field("skype"); ?>
    </a>
    <a rel="nofollow" href="mailto:<?php the_field("email",5); ?>" class="sidebar__dados--mail">
      <?php the_field("email"); ?>
    </a>
  </section><!-- sidebar__dados -->

</section><!-- sidebar -->
