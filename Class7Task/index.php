<?php

//Task 1
include "Audi.php";
$audi=new Audi("Silver",5);
$audi->SetEngineStatus("1000HP");
$audi->SetBodyPart("Made by Germany");
echo "Color :<strong>".$audi->GetColor()."</strong><br>";
echo "Seat : <strong>".$audi->GetSeats()."</strong><br>";
echo "Horse Power : <strong>".$audi->GetEngineStatus()."</strong><br>";
echo "Parts : <strong>".$audi->GetBodyPart()."</strong><br>";

//Task 2


include "MyName.php";
$myName= new MyName();
$myName->PrintName("Anik");

//Task 3

include "Connection.php";
$connection=new Connection();
$connection->InsertData("OoPo","C1",14000);
$connection->InsertData("Vivo","C1",14000);
$connection->InsertData("Nokia","X2",17000);
$connection->InsertData("Xaomi","Note 7",19000);
$connection->InsertData("ASUS","F1",19000);
$connection->InsertData("Symphony","Sym1",10000);
$connection->InsertData("LG","Jhaq",25000);
$connection->InsertData("Sony","S11 pro",24000);
$connection->InsertData("Samsung","J8",35000);
$connection->InsertData("I-Phone","10",54000);