<div class="col ml-2">
    <h3 class="h1">Comentarios: <?php comments_number( 'No hay comentarios.', 'Un comentario', '% comentarios' ); ?></h3>
</div>
<!-- Comments Form -->
<?php comment_form(); ?>
<!-- / Comments Form -->
<?php 
    wp_list_comments(array(
        'callback' => function($comment, $args, $depth) { ?>
            <!-- Comment with nested comments -->
            <div class="media mb-4">
                <div class="d-flex mr-3 rounded-circle">
                    <?php
                        if ( $args['avatar_size'] != 0 ) {
                        echo get_avatar( $comment, $args['avatar_size'] ); 
                        }
                    ?>
                </div>
                <div class="media-body">
                    <h5 class="mt-0"><?php printf( __( '<cite>%s</cite> <span>dice:</span>' ), get_comment_author_link() ); ?></h5>
                    <?php if ( $comment->comment_approved == '0' ) { ?>
                        <em class="comment-awaiting-moderation"><?php _e( 'Comentario en espera de aprobación.' ); ?></em><br/>
                    <?php } ?>
                    <?php comment_text(); ?>

                    <span>
                    <?php 
                        comment_reply_link( 
                            array_merge( 
                                $args, 
                                array( 
                                    'reply_text' => 'Responder', 
                                    'depth'     => $depth, 
                                    'max_depth' => $args['max_depth'] 
                                ) 
                            ) 
                        ); ?>
                    </span>
                    
                    <span>
                        <?php edit_comment_link( __( 'Editar' ), '  ', '' ); ?>
                    </span>
                </div>
            </div>
            <!-- / nested coments -->   
        <?php } 
    )); 
?>
