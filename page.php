<!-- header -->
<?php get_header(); ?>
<!-- /header -->

<!-- main content -->
<main class="container py-5">
    <div class="row">
        <!-- article -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
        <?php endwhile; endif; ?>
        <!-- / article -->
    </div>
    <div class="container-fluid">
        <div class="col d-flex justify-content-center">
            <?php get_template_part('template-parts/content', 'pagination') ?>
        </div>
    </div>
</main>
<!-- / main content -->

<!-- Footer -->
<?php 
    get_footer();
?>
