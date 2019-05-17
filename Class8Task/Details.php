<?php
include "MyForm.php";
include "Infrastructure/Connection.php";
include "Service/MobileService.php";
include "Service/RatingsService.php";
include "Service/CommentsService.php";

$form=new MyForm();
$conn= new Connection();
$mobileService= new MobileService($conn->GetConnection());
$ratingService = new RatingsService($conn->GetConnection());
$commentService = new CommentsService($conn->GetConnection());

if(isset($_POST['ImageSubmit'])){
    $model=$mobileService->GetById($_POST['Id']);
    $ratings=$ratingService->CountById($_POST['Id']);
    $comments=$commentService->GetById($_POST['Id']);
    $form->Details($model, $ratings[0], $comments);
}
else{
    echo '<script>window.location="List.php"</script>';
}
