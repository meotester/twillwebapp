<?php
  /*
    Template Name: Twill Login
  */
?>

<?php
if ( is_user_logged_in() ) {
    wp_redirect( home_url() );
    exit;
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body>

<div id="desktop_signin">
	<div class="container-fluid">
		<div class="row">
				<div class="left-container col-md-7">
					<div class="logo">
						<img width="100" src="<?php bloginfo('stylesheet_directory'); ?>/assets/imgs/twill_logo.png">
					</div>
					<div class="lc_content">
						<h1 class="si_title">
							Welcome to Twill!
						</h1>
						<h2 class="si_subtitle">
							Sit Amet
						</h2>
						<p class="si_det">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
					</div>
				</div>
				<div class="right-container col-md-5">
					<div class="rc_content">
						<p class="form_det">At vero eos et accusamus et iusto odio dignissimos.</p>
						<?php $args = array(
								'echo' => true,
								'redirect' => home_url(),
								'form_id' => 'loginform',
								'label_username' => __( 'Username' ),
								'label_password' => __( 'Password' ),
								'label_remember' => __( 'Remember Me' ),
								'label_log_in' => __( 'Sign In' ),
								'id_username' => 'user_login',
								'id_password' => 'user_pass',
								'id_remember' => 'rememberme',
								'id_submit' => 'wp-submit',
								'remember' => true,
								'value_username' => NULL,
								'value_remember' => false );
						wp_login_form($args);
						?>
					</div>
				</div>
		</div>
	</div>
</div>
<div id="mbl_signin">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="logo_mbl">
					<img width="100" src="<?php bloginfo('stylesheet_directory'); ?>/assets/imgs/twill_logo.png">
				</div>
				<div class="mbl_content">
					<p class="form_det">At vero eos et accusamus et iusto odio dignissimos.</p>
					<?php $args = array(
                                                  'echo' => true,
                                                  'redirect' => home_url(),
                                                  'form_id' => 'loginform',
                                                  'label_username' => __( 'Username' ),
                                                  'label_password' => __( 'Password' ),
                                                  'label_remember' => __( 'Remember Me' ),
                                                  'label_log_in' => __( 'Sign In' ),
                                                  'id_username' => 'user_login',
                                                  'id_password' => 'user_pass',
                                                  'id_remember' => 'rememberme',
                                                  'id_submit' => 'wp-submit',
                                                  'remember' => true,
                                                  'value_username' => NULL,
                                                  'value_remember' => false );
                                          wp_login_form($args);
                                          ?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php wp_footer(); ?>
</body>
</html>