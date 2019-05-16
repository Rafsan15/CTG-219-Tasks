<html>
<head>
    <title>MOBO HUB</title>
</head>


<?php
include "MyForm.php";
include "Connection.php";
include "MobileService.php";
include "Mobile.php";
$form=new MyForm();
$conn= new Connection();
$mobileService= new MobileService($conn->GetConnection());
$form->InsertForm();




?>


