<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
*/
?>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script async src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.js" charset="utf-8"></script>
    <script async type="text/javascript">
      jQuery(document).ready(function($){
        $("button").on("click",function(){
          $("button").removeClass("active");
          $(this).addClass("active");

          if($(this).attr("name") == "tudo"){
            $(".portfolio__single").fadeIn("slow");
          }
          else{
            $("."+$(this).attr('name')).fadeIn("slow");
            $(".portfolio__single:not(."+$(this).attr('name')+")").fadeOut("slow");
          }
        });
      });
    </script>

    <script async type="text/javascript">
      $(".nav a").click(function(e) {
        // Prevent a page reload when a link is pressed
        e.preventDefault();
        // Call the scroll function
        $('html,body').animate({
          scrollTop: $($(this).attr("href")).offset().top},
          'slow');
        });
    </script>
        <!-- Add fancyBox -->


    <script async type="text/javascript">
      jQuery(document).ready(function($) {
        $(".fancybox").fancybox({
					maxWidth	: 800,
					maxHeight	: 600,
					fitToView	: false,
					width		: '70%',
					height		: '70%',
					autoSize	: false,
					closeClick	: false,
					openEffect	: 'elastic',
					closeEffect	: 'none'
				});
      });
    </script>
    <?php wp_footer(); ?>
  </body>
</html>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
