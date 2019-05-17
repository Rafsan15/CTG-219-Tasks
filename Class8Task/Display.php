<?php
include "MyForm.php";
include "Infrastructure/Connection.php";
include "Service/MobileService.php";
include "Entities/Mobile.php";

$form=new MyForm();
$conn= new Connection();
$mobileService= new MobileService($conn->GetConnection());

if(isset($_POST['SearchBtn'])){
    $price=$_POST['Search'];
    if($price<=0){
        header("Location: Web/List.php");
    }
    else{
        $data=$mobileService->GetByPrice($price);
        $form->ShowAllData($data);
    }


}
else{
    echo '<script>window.location="List.php"</script>';
}