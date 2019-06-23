<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 6/22/2019
 * Time: 6:50 PM
 */

include "Connection.php";
include "Form.php";
$form=new Form();
$conn= new Connection();
if(isset($_POST['Register'])) {
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];
    if ($name=="" ||$email=="" || $password==""  ) {
        echo "Please Enter All Fields";
    } else {
        $conn->Register($name,$email,$password);
        echo '<script>window.location="LogIn.php"</script>';

    }
}

else{
    $form->RegisterPage();
}