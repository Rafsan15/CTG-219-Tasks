<?php

include "IService/ICommentsService.php";
class CommentsService implements ICommentsService
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn=$conn;
    }

    function InsertComments($model)
    {
        try{
            $statement= $this->conn->prepare("INSERT INTO comments (Comment,Email,MobileId) VALUES (:comment,:email,:mobileId)");
            $statement->execute(
                array(
                    ':comment'=> $model->GetComment(),
                    ':email'=> $model->GetEmail(),
                    ':mobileId'=>$model->GetMobileId()

                )
            );

        }
        catch (Exception $ex){
            echo "<br>Error in Inserting Data";
        }
    }

    function GetById($id)
    {
        try{
            $query= "SELECT * FROM comments where MobileId=".$id;
            $result = $this->conn->prepare($query);
            $result->execute();
//          print_r($result->fetchAll());
            return $result->fetchAll();
        }
        catch(Exception $ex){
            echo "Invalid<br>";
        }
    }
}