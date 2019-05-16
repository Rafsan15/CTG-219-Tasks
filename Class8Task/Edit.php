<?php
include "MyForm.php";
include "Connection.php";
include "MobileService.php";
include "Mobile.php";

$form=new MyForm();
$conn= new Connection();
$mobileService= new MobileService($conn->GetConnection());
$mobile= new Mobile();

if(isset($_POST['Edit'])){
    $data=$mobileService->GetById($_POST['Id']);
    $form->UpdateForm($data);
}

if(isset($_POST['Update'])){
    $mobile->SetName($_POST['Name']);
    $mobile->SetModel($_POST['Model']);
    $mobile->SetPrice($_POST['Price']);
    $mobile->SetId($_POST['Id']);
    $tmp=$_FILES["ImgFile"]["tmp_name"];

    if($tmp==null){
        $mobile->SetImages($_POST['Images']) ;

    }else{
        $x=explode('.',$_FILES["ImgFile"]["name"]);
        $img=uniqid().".".end($x);
        move_uploaded_file($tmp,"images/".$img);
        $mobile->SetImages($img) ;

    }

    $mobileService->UpdateRow($mobile);
    header("Location: List.php");
}
