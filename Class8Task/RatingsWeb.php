<?php

include "MyForm.php";
include "Infrastructure/Connection.php";
include "Service/MobileService.php";
include "Service/RatingsService.php";
include "Service/CommentsService.php";
include "Entities/Ratings.php";
include "Entities/Comments.php";

$form = new MyForm();
$conn = new Connection();
$mobileService= new MobileService($conn->GetConnection());
$ratingService = new RatingsService($conn->GetConnection());
$commentService = new CommentsService($conn->GetConnection());
$ratings=new Ratings();
$comments=new Comments();

if(isset($_POST['RatingsSubmit'])) {
    $ratings->SetRating($_POST['TotalRatings']);
    $ratings->SetMobileId($_POST['MobileId']);
    $ratingService->InsertRatings($ratings);
    if($_POST['Comment']!=""){
        $comments->SetComment($_POST['Comment']);
        $comments->SetEmail($_POST['Email']);
        $comments->SetMobileId($_POST['MobileId']);
        $commentService->InsertComments($comments);
        echo '<script>window.location="List.php"</script>';
    }
    else{
        echo '<script>window.location="List.php"</script>';
    }
}
