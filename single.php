<!-- header -->
<?php get_header(); ?>
<!-- /header -->
        <!-- main content -->
        <main class="container py-5">

            <?php get_template_part('template-parts/content', 'userinfo') ?>

            <div class="row shadow-sm bg-white p-3 mb-4">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="col">
                    <!-- Date && category -->
                    <small class="text-muted text-uppercase"><?php the_time('j F, Y'); ?></small> / <small class="text-uppercase">#<?php the_category(' '); ?></small>
                    <!-- / date -->
                    <!-- Post title -->
                    <h1 class="font-weight-bold mb-5">
                        <?php the_title(); ?>
                    </h1>
                    <!-- / post title -->
                    <!-- feauture image -->
                    <?php
                        if(has_post_thumbnail()) {
                            the_post_thumbnail('post-thumbnails', array(
                                'class' => 'img-fluid mb-5'
                            ));
                        }
                    ?>
                    <!-- / feature image -->

                    <!-- post content -->
                    <div class="lead">
                        <?php the_content(); ?>
                    </div>
                    <!-- / post content -->
                    <hr>
                    <div class="row">
                        <div class="col text-center">
                            <small class="badge badge-info"><?php the_tags(' '); ?></small>
                        </div>
                        <div class="col text-center">
                            <span>Compartir: </span>
                            <a href="#" class="text-info mr-1"><i class="fab fa-github"></i></a>
                            <a href="#" class="text-info mr-1"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="text-info mr-1"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-info"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </article>
                <?php endwhile; endif; ?>
            </div>
            <div class="row">
                <div class="col shadow-sm bg-white p-3">
                    <!-- comments -->
                    <?php
                        if( comments_open() || get_comment_number()):
                            comments_template();
                        endif;
                    ?>
                    <!-- / comments -->
                </div>
            </div>
        </main>
        <!-- / main content -->
<!-- Footer -->
<?php 
    get_footer();
?>
