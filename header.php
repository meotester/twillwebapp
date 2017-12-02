<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package twillwebapp
 */

?>
<?php
if ( ! is_user_logged_in() ) {
    wp_redirect( home_url('twill-login') );
    exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="twill_header" class="container-fluid">
                    <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                     <a href="<?php bloginfo('url'); ?>"><img width="100" src="<?php bloginfo('stylesheet_directory'); ?>/assets/imgs/twill_logo.png"/></a>
                                </div>
                                <div class="pull-right">
                                      <a href="#menu-toggle" class="pull-right" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
                               </div>
                           </div>
                    </div>
</div>
<div style="height: 51px; display: block;"></div>
<div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <a href="<?php bloginfo('url');?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>               
                <li>
                    <a href="<?php bloginfo('url');?>/admin-control/"><i class="fa fa-cogs" aria-hidden="true"></i> Admin Control</a>
                </li>
                <li>
                    <a href="<?php echo wp_logout_url( home_url() ); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">