<?php
session_start();
if( isset($_POST['token']) )
{
    if( $_POST['token'] == "teste")
    {
        // auth okay, setup session
        $_SESSION['token'] = $_POST['token'];
        // redirect to required page
        //header( "Location: admin.php" );
        header( "Location: admin" );
     } else {
        // didn't auth go back to loginform
        // header( "Location: login.php" );
        header( "Location: login" );
     }  
 } else {
     // username and password not given so go back to login     
     unset($_SESSION['token']);
     session_destroy();     
    //  header( "Location: login.php" );
     header( "Location: login" );
 }
?>