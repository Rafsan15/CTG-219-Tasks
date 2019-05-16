<?php


class Mobile
{
    private $Id;
    private $Name;
    private $Model;
    private $Price;
    private $Images;

    public function SetId($id){$this->Id=$id;}
    public function SetName($name){$this->Name=$name;}
    public function SetModel($model){$this->Model=$model;}
    public function SetPrice($price){$this->Price=$price;}
    public function SetImages($images){$this->Images=$images;}

    public function GetId(){return $this->Id;}
    public function GetName(){return $this->Name;}
    public function GetModel(){return $this->Model;}
    public function GetPrice(){return $this->Price;}
    public function GetImages(){return $this->Images;}
}