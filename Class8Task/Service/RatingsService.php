<?php

include "IService/IRatingsService.php";
class RatingsService implements IRatingsService
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn=$conn;
    }

    function InsertRatings($model)
    {
        try{
            $statement= $this->conn->prepare("INSERT INTO ratings (Rating,MobileId) VALUES (:rating,:mobileId)");
            $statement->execute(
                array(
                    ':rating'=> $model->GetRating(),
                    ':mobileId'=>$model->GetMobileId()

                )
            );

        }
        catch (Exception $ex){
            echo "<br>Error in Inserting Data";
        }
    }

    function CountById($id)
    {
        try{
            $query= "SELECT AVG(rating) FROM ratings where MobileId=".$id;
            $result = $this->conn->prepare($query);
            $result->execute();
//          print_r($result->fetch());
            return $result->fetch();
        }
        catch(Exception $ex){
            echo "Invalid<br>";
        }
    }
}