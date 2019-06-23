<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 6/22/2019
 * Time: 6:30 PM
 */

class Connection
{
    private $conn;
    public function __construct()
    {
        $this->conn=new PDO("mysql:host=localhost;dbname=Class10","root","");
    }
    public function GetConnection(){return $this->conn;}

    public function SaveMessage($msg){
        try{
            $statement= $this->conn->prepare("INSERT INTO messages (Message,IsImportant) VALUES (:message,:isimportant)");
            $statement->execute(
                array(
                    ':message'=> $msg,
                    ':isimportant'=>'false'

                )
            );
        }
        catch (Exception $ex){
            echo "<br>Error in Inserting Data";
        }
    }

    public function Register($name,$email,$password){
        try{
            $statement= $this->conn->prepare("INSERT INTO LogIn (Name,Email,Password) VALUES (:name,:email,:password)");
            $statement->execute(
                array(
                    ':name'=> $name,
                    ':email'=>$email,
                    ':password'=>$password

                )
            );
        }
        catch (Exception $ex){
            echo "<br>Error in Inserting Data";
        }
    }

    public  function LogIN($email,$password)
    {

        try{
            $query= "SELECT * FROM LogIn where Email='".$email."' And Password='".$password."'";
            $result = $this->conn->prepare($query);
            $result->execute();
        //  print_r($result->fetchAll());
            return $result->fetchAll();
        }
        catch(Exception $ex){
            echo "Invalid<br>";
        }

    }

    public  function GetMessages()
    {

        try{
            $query= "SELECT * FROM Messages";
            $result = $this->conn->prepare($query);
            $result->execute();
            //  print_r($result->fetchAll());
            return $result->fetchAll();
        }
        catch(Exception $ex){
            echo "Invalid<br>";
        }

    }

    public function DeleteMsg($id){
        try{
            $query= "DELETE FROM Messages where id=".$id;
            $result = $this->conn->prepare($query);
            $result->execute();
        }
        catch(Exception $ex){
            echo "Invalid<br>";
        }

    }

    function UpdateMessage($ismarked,$id)
    {
        try{
            $statement= $this->conn->prepare("UPDATE Messages SET IsImportant=:isimp where id=".$id);
            $statement->execute(
                array(
                    ':isimp'=>$ismarked

                )
            );
        }
        catch (Exception $ex){
            echo "<br>Error in Inserting Data";
        }
    }

}