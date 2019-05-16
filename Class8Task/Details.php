<?php
include "MyForm.php";
include "Connection.php";
include "MobileService.php";
include "Mobile.php";

$form=new MyForm();
$conn= new Connection();
$mobileService= new MobileService($conn->GetConnection());
$mobile= new Mobile();

if(isset($_POST['ImageSubmit'])){
    $model=$mobileService->GetById($_POST['Id']);
    $form->Details($model);
}
else{
    header("Location: List.php");
}
