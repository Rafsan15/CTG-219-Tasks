<?php

include "FullName.php";
class MyName extends FullName
{
    public function PrintName($name){
        echo "My Nick Name is <strong>".$name."</strong><br>";
    }
}