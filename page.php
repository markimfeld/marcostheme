<!-- header -->
<?php get_header(); ?>
<!-- /header -->
<!-- main content -->
<main class="container py-5">
    <div class="row">
        <!-- left column -->
        <div class="col-lg-8 mr-4">
            <?php get_template_part('template-parts/content', 'userinfo') ?>

            <div class="row shadow-sm bg-white py-3">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <section class="col">
                        <h1 class="text-center"><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                    </section>
                <?php endwhile; endif; ?>
            </div>
            <div class="container-fluid">
                <div class="col d-flex justify-content-center">
                    <?php get_template_part('template-parts/content', 'pagination') ?>
                </div>
            </div>
        </div>
        <!-- / left column -->
        
        <!-- right aside -->
        <?php get_sidebar(); ?>
        <!-- / right aside -->
    </div>
</main>
<!-- / main content -->

<!-- Footer -->
<?php 
    get_footer();
?>
