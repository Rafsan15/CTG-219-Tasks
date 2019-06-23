<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 6/22/2019
 * Time: 6:40 PM
 */
session_start();
include "Connection.php";

$conn= new Connection();
if(isset($_POST['SubmitBtn'])) {
    $msg=$_POST['Message'];
    if ($msg=="") {
        echo "Please Enter a Message";
    } else {
        $conn->SaveMessage($msg);
        echo '<script type="text/javascript">alert("Your Message Sent Successfully");</script>';

        echo '<script>window.location="index.php"</script>';
    }
}