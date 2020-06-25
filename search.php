<!-- header -->
<?php get_header(); ?>
<!-- /header -->

<!-- main content -->
<main class="container py-5">
    <div class="row">
        <!-- left column -->
        <div class="col-lg-8 mr-lg-4 mb-md-3 m-md-0">

            <div class="row shadow-sm bg-white py-3">
                <div class="col-12">
                    <div class="container-fluid bg-info py-5 mb-4">
                        <h2 class="text-white text-center h1">Resultados de búsqueda:</h2>
                    </div>
                </div>
                <section class="col-12">
                    <ul class="list-group">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <li class="list-group-item rounded-0">
                                <a href="<?php the_permalink(); ?>" class="text-dark">
                                    <h3 class="card-title font-weight-bold h6 mb-0">
                                        <?php the_title(); ?>
                                    </h3>
                                </a>
                            </li>
                        <?php endwhile;  ?>
                    </ul>
                </section>

                <?php else: ?>
                    <section class="col">
                        <div class="alert alert-info" role="alert">
                            No hay resultados encontrados.
                        </div>
                    </section>
                <?php endif; ?>
                <!-- / article -->
            </div>
            <div class="row shadow-sm bg-white mb-4">
                <div class="col d-flex justify-content-center">
                    <?php get_template_part('template-parts/content', 'pagination') ?>
                </div>
            </div>
            <?php get_template_part('template-parts/content', 'userinfo') ?>
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
