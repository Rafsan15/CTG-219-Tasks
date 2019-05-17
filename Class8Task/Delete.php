<?php
include "MyForm.php";
include "Infrastructure/Connection.php";
include "Service/MobileService.php";
include "Entities/Mobile.php";

$form=new MyForm();
$conn= new Connection();
$mobileService= new MobileService($conn->GetConnection());

if(isset($_POST['Delete'])){
    $mobileService->DeleteRow($_POST['Id']);
    echo '<script>window.location="List.php"</script>';
}
