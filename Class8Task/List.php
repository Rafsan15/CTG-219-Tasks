<?php
include "MyForm.php";
include "Connection.php";
include "MobileService.php";
include "Mobile.php";
$form=new MyForm();
$conn= new Connection();
$mobileService= new MobileService($conn->GetConnection());
if(isset($_POST['Submit'])){
    $mobile= new Mobile();
    $mobile->SetName($_POST['Name']) ;
    $mobile->SetModel($_POST['Model']) ;
    $mobile->SetPrice($_POST['Price']) ;
    $mobileService->InsertRow($mobile);
    $form->ShowAllData($mobileService->GetAll());
}
    else{

        $form->ShowAllData($mobileService->GetAll());

    }
