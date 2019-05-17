<html>
<head>
    <title>MOBO HUB</title>
</head>


<?php
include "MyForm.php";
include "Infrastructure/Connection.php";
include "Service/MobileService.php";
include "Entities/Mobile.php";

$form=new MyForm();
$conn= new Connection();
$mobileService= new MobileService($conn->GetConnection());
$form->InsertForm();




?>


