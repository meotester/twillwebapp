<?php

/**** Twill Custom functions ****/

function twill_head_script() { ?>
	<!-- Bootstrap core CSS -->
        <link href="<?php bloginfo('stylesheet_directory'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/vendor/font-awesome/css/font-awesome.min.css">

        <!-- Custom styles for this template -->
        <link href="<?php bloginfo('stylesheet_directory'); ?>/css/simple-sidebar.css" rel="stylesheet">
        <link href="<?php bloginfo('stylesheet_directory'); ?>/css/twill_styles.css" rel="stylesheet">
<?php }
add_action( 'wp_head', 'twill_head_script' );



function twill_footer_script() { ?>
	<!-- Bootstrap core JavaScript -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/customjs.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    jQuery("#menu-toggle").click(function(e) {
        e.preventDefault();
        jQuery("#wrapper").toggleClass("toggled");
    });
    </script>
<?php }
add_action( 'wp_footer', 'twill_footer_script' );

show_admin_bar( false );

function twill_wizard_function() { ?>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac rutrum mi. Curabitur laoreet et tellus quis ultrices. Quisque consequat consequat semper. Sed magna ante, ornare sed augue et, condimentum efficitur nisi.</p>
    <a href="#twizard" class="btn btn-warning">Get Started</a>
    
    <div id="twizard" style="display: none;">
           nfghjgf
    </div>


<?php }

add_shortcode('twill_wizard', 'twill_wizard_function');


add_action( 'admin_init', 'redirect_non_admin_users' );

function redirect_non_admin_users() {
	if ( ! current_user_can( 'manage_options' ) && '/wp-admin/admin-ajax.php' != $_SERVER['PHP_SELF'] ) {
		wp_redirect( home_url('twill-login') );
		exit;
	}
}


function twill_admin_control_function() { ?>
    <div class="row">
	       <div class="col-md-3">
		          <div class="twill-box">
				        <a href="#">
				        <i class="fa fa-user-plus" aria-hidden="true"></i>
				        <h4>Create Accounts</h4>
						</a>
				  </div>
			</div>	  
			
			<div class="col-md-3">
		          <div class="twill-box">
				        <a href="#">
				        <i class="fa fa-database" aria-hidden="true"></i>
				        <h4>Client DB</h4>
						</a>
				  </div>
			</div>
			
			<div class="col-md-3">
		          <div class="twill-box">
				        <a href="#">
				        <i class="fa fa-gavel" aria-hidden="true"></i>
				        <h4>Trustees</h4>
						</a>
				  </div>
			</div>
			
			<div class="col-md-3">
		          <div class="twill-box">
				        <a href="#">
				        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
				        <h4>Alerts</h4>
						</a>
				  </div>
			</div>
     </div>	
	


<?php }

add_shortcode('twill_admin', 'twill_admin_control_function');

