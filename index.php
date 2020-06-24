<!-- header -->
<?php get_header(); ?>
<!-- /header -->

<!-- main content -->
<main class="container py-5">

    <?php get_template_part('template-parts/content', 'userinfo') ?>

    <div class="row shadow-sm bg-white py-3">
        <div class="col-12">
            <div class="container-fluid bg-info py-5 mb-4">
                <h2 class="text-white text-center h1">Lo último en el blog</h2>
            </div>
        </div>
        <!-- article -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-md-6 col-lg-4 mb-5">
                <article class="card">
                    <a href="<?php the_permalink(); ?>">
                        <?php
                            if(has_post_thumbnail()) {
                                the_post_thumbnail('post-thumbnails', array(
                                    'class' => 'img-fluid'
                                ));
                            }
                        ?>
                    </a>
                    <div class="card-body">
                        <span class="badge badge-info mb-2 text-white"><?php the_category(' '); ?></span>
                        <a href="<?php the_permalink(); ?>" class="text-dark">
                            <h5 class="card-title font-weight-bold">
                                <?php the_title(); ?>
                            </h5>
                        </a>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div>
                            <?php
                                $user = wp_get_current_user();
                                if ( $user ) :
                            ?>
                                <img class="rounded-sm rounded-circle" style="width: 30px;" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
                            <?php endif; ?>
                            <small class="text-muted"> <?php the_author(); ?></small>
                        </div>
                        <small class="text-muted">
                            <i class="fas fa-calendar-alt"></i> <?php the_time('j F, Y'); ?> 
                        </small>
                    </div>
                </article>
            </div>
        <?php endwhile; endif; ?>
        <!-- / article -->
    </div>
    <div class="row shadow-sm bg-white">
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
