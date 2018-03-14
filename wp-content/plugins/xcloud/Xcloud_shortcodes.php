<?php
function foobar_func( $atts , $content ){
    $output = "foo bar";

    return $output;
}



add_shortcode( 'foobar', 'foobar_func' );
?>

