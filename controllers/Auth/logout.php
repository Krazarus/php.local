<?php
if (!session_id()) {
    session_start();
}
$fb = new \App\Services\FacebookAPI();

if( isset( $_SESSION['facebook_access_token'] ) ) {
    unset( $_SESSION['facebook_access_token'] );
    session_destroy();
    header( 'Location: /', true, 307 );
}




