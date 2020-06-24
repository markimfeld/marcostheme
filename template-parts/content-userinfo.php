<div class="row d-flex shadow-sm bg-white py-3 mb-3">
    <div class="col text-center pr-lg-0">
        <?php
            $user = wp_get_current_user();
            if ( $user ) :
        ?>
            <img class="rounded-sm rounded-circle" style="width: 100px;" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
        <?php endif; ?>
    </div>
    <div class="col-10 col-md-11 col-lg-10 pl-0 pl-md-3 pl-lg-0 align-self-center">
        <p class="h4 font-weight-bold"> 
            <?php global $current_user;
                get_currentuserinfo();
                echo $current_user->display_name;
            ?>
        </p>
        <p class="text-muted">
            <?php global $current_user;
                get_currentuserinfo();
                echo $current_user->user_description;
            ?>
        </p>
        <div class="row">
            <div class="col">
                <a href="#" class="text-info mr-1"><i class="fab fa-github"></i></a>
                <a href="#" class="text-info mr-1"><i class="fab fa-youtube"></i></a>
                <a href="#" class="text-info mr-1"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-info"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>