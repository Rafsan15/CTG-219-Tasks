<?php
include "MyForm.php";
include "Connection.php";
include "MobileService.php";
include "Mobile.php";
$form=new MyForm();
$conn= new Connection();
$mobileService= new MobileService($conn->GetConnection());
if(isset($_POST['SearchBtn'])){
    $price=$_POST['Search'];
    $data=$mobileService->GetByPrice($price);
    $form->ShowAllData($data);
}
else{

}