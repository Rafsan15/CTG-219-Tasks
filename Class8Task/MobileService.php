<?php
include "IMobileService.php";

class MobileService implements IMobileService
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn=$conn;
    }

    function InsertRow($model)
    {
        try{
            $statement= $this->conn->prepare("INSERT INTO mobiles (Name,Model,Price,Images) VALUES (:name,:model,:price,:image)");
            $statement->execute(
                array(
                    ':name'=> $model->GetName(),
                    ':model'=>$model->GetModel(),
                    ':price'=>$model->GetPrice(),
                    ':image'=>$model->GetImages()
                )
            );

        }
        catch (Exception $ex){
            echo "<br>Error in Inserting Data";
        }
    }

    function UpdateRow($model)
    {
        try{

            $statement= $this->conn->prepare("UPDATE mobiles SET name=:name , model=:model, price=:price , images=:image where id=:id");
            $statement->execute(
                array(
                    ':name'=> $model->GetName(),
                    ':model'=>$model->GetModel(),
                    ':price'=>$model->GetPrice(),
                    ':image'=>$model->GetImages(),
                    ':id'=>$model->GetId()
                )
            );

        }
        catch (Exception $ex){
            echo "<br>Error in Inserting Data";
        }
    }

    function DeleteRow($id)
    {
        try{
            $query= "DELETE FROM mobiles where id=".$id;
            $result = $this->conn->prepare($query);
            $result->execute();
        }
        catch(Exception $ex){
            echo "Invalid<br>";
        }
    }

    function GetById($id)
    {
        try{
            $query= "SELECT * FROM mobiles where id=".$id;
            $result = $this->conn->prepare($query);
            $result->execute();
//          print_r($result->fetch());
            return $result->fetch();
        }
        catch(Exception $ex){
            echo "Invalid<br>";
        }
    }

    function GetAll()
    {
        try{
            $query= "SELECT * FROM mobiles";
            $result = $this->conn->prepare($query);
            $result->execute();
//          print_r($result->fetchAll());
            return $result->fetchAll();
        }
        catch(Exception $ex){
            echo "Invalid<br>";
        }
    }

    function GetByPrice($price)
    {
        try{
            $query= "SELECT * FROM mobiles where Price >=".$price;
            $result = $this->conn->prepare($query);
            $result->execute();
//            print_r($result->fetchAll());
            return $result->fetchAll();
        }
        catch(Exception $ex){
            echo "Invalid<br>";
        }
    }
}