<?php


class Connection
{
    public $conn;
    public function __construct(){
        $this->conn=new PDO("mysql:host=localhost;dbname=CtgClass7","root","");

    }
    public function InsertData($name, $model,$price){
        try{
            $statement= $this->conn->prepare("INSERT INTO mobiles (Name,Model,Price) VALUES (:name,:model,:price)");
            $statement->execute(
                array(
                    ':name'=> $name,
                    ':model'=>$model,
                    ':price'=>$price
                )
            );
            echo"<br>Successful";
        }
        catch (Exception $ex){
            echo "<br>Error in Inserting Data";
        }
    }
}