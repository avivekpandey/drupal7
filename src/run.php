<?php

/**
 * Root directory of Drupal installation.
 */
define('DRUPAL_ROOT', getcwd());

include_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);


//$my_img = imagecreate( 100, 100 );
//$background = imagecolorallocate( $my_img, 0, 0, 255 );
//$text_colour = imagecolorallocate( $my_img, 255, 255, 0 );
//imagestring( $my_img, 5 , 50, 50, "VP", $text_colour );
//imagesetthickness ( $my_img, 5 );
//header( "Content-type: image/png" );
//imagepng( $my_img );
//magedestroy( $my_img );

$user = user_load(1);
print_r($user);