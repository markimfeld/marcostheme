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
                            <i class="fas fa-tags"></i> <?php the_tags(' '); ?>
                        </div>
                        <div class="col text-center">
                            <?php 
                                /* Social Share Buttons template for Wordpress
                                * By Daan van den Bergh 
                                */ 
                                $postUrl = 'http' . ( isset( $_SERVER['HTTPS'] ) ? 's' : '' ) . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; 
                            ?>
                            <section class="sharing-box content-margin content-background clearfix">
                                <div class="share-button-wrapper">
                                    <span class="mr-2">Comparte el conocimiento: </span>
                                    <a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>" title="Tweet this"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Comparte en Facebook"><i class="fab fa-facebook"></i></a>
                                    <a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $postUrl; ?>" title="Comparte en Linkedin"><i class="fab fa-linkedin"></i></a>
                                </div>
                                
                            </section>
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
