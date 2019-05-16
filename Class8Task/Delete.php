<?php
include "MyForm.php";
include "Connection.php";
include "MobileService.php";
include "Mobile.php";
$form=new MyForm();
$conn= new Connection();
$mobileService= new MobileService($conn->GetConnection());
if(isset($_POST['Delete'])){
    $mobileService->DeleteRow($_POST['Id']);
    header("Location: List.php");
}
