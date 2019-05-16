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
    $tmp=$_FILES["ImgFile"]["tmp_name"];
    $x=explode('.',$_FILES["ImgFile"]["name"]);
    $img=uniqid().".".end($x);
    move_uploaded_file($tmp,"images/".$img);
    $mobile->SetImages($img) ;

    $mobileService->InsertRow($mobile);
    $form->ShowAllData($mobileService->GetAll());
}
    else{

        $form->ShowAllData($mobileService->GetAll());

    }
