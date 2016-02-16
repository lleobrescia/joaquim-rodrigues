<?php
/**
* The main template file
*

*/
?>
<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="sobre__mim"  class="content">

  <section class="sobre__mim">
    <div class="sobre__mim__text">
      <?php the_field("sobre_mim"); ?>
    </div>
    <div class="sobre__mim__foto">
      <img src="<?php the_field("retrato"); ?>" alt="Joaquim Rodrigues" >
    </div>
  </section>

  <section class="portfolio">
    <h1 class="portfolio__title">Portfólio</h1>
    <div class="portfolio__text">
      <p><?php the_field("portfolio"); ?></p>
    </div>
  </section>

  <div class="seletor">
    <ul class="seletor__lista">
      <li><button class="seletor__lista--botao active" type="button" name="tudo">tudo</button></li>
      <?php
      $args = array(
        'type'                     => 'post',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'name',
        'order'                    => 'ASC',
        'hide_empty'               => 0,
        'hierarchical'             => 1,
        'exclude'                  => '',
        'include'                  => '',
        'number'                   => '',
        'taxonomy'                 => 'category',
        'pad_counts'               => false
      );

      $filtros = get_categories( $args );
      ?>

      <?php foreach ($filtros as $filtro): ?>
        <li><button class="seletor__lista--botao" type="button" name="<?php echo $filtro->slug; ?>"><?php echo $filtro->name; ?></button></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <section id="portfolio" class="portfolio__list">
    <?php
    $args = array(
      'posts_per_page'   => 1000,
      'post_type'        => 'post',
      'post_status'      => 'publish',
      'suppress_filters' => true
    ); // parametros dos posts
    $posts_array = get_posts( $args ); //pega os posts de acordo com os parametros
    ?>
    <?php foreach ($posts_array as $post): setup_postdata( $post ); //lista os posts?>
      <?php $categories = get_the_category($post->ID); //pega as categorias do post?>
      <article class="portfolio__single <?php echo esc_html( $categories[0]->slug ); //pega o slug da categoria, para usar em filtro  ?>">
        <?php $images = get_field('galeria_de_fotos'); $count = 0; ?>
        <?php if ($images): ?>
          <?php foreach ($images as $image): ?>
            <?php if ($count == 0): ?>
              <a class="fancybox" rel="<?php echo $post->ID; ?> nofollow" href="<?php echo $image['url']; ?>">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
              </a>

              <div class="image__gallery" style="display:none">

              <?php else: ?>
                <a class="fancybox" rel="<?php echo $post->ID; ?> nofollow" href="<?php echo $image['url']; ?>">
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </a>
              <?php endif; ?>
              <?php $count++; ?>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field("video",$post->ID)): ?>
          <a rel="nofollow" class="fancybox fancybox.iframe" href="http://www.youtube.com/v/<?php the_field("video",$post->ID); ?>?fs=1&amp;autoplay=1">
            <img src="<?php the_field("thumbnail_do_video",$post->ID); //compo personalizado ?>" alt="">
          </a>
        <?php endif; ?>

        <p class="portfolio__single--descricao">
          <span class="portfolio__single--categoria"><?php echo esc_html( $categories[0]->name ); //pega o nome da categoria do post ?> /</span>
          <?php the_field("texto",$post->ID);//compo personalizado ?>
        </p>
      </article>

    <?php endforeach; wp_reset_postdata(); ?>

  </section><!-- portfolio__list -->
</div><!-- content -->

<?php get_footer(); ?>
