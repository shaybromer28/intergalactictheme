<?php get_header (); ?>
<div class="page-content">
<div class="inner-content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content-meat"><?php the_content (); ?></div>
<?php endwhile; endif; ?>
</div>

</div>


<?php get_footer ();  ?>
