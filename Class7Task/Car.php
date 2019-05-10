<?php


class Car
{
    private $EngineStatus;
    private $BodyPart;

    public function SetEngineStatus($EngineStatus){
        $this->EngineStatus=$EngineStatus;
    }
    public function SetBodyPart($BodyPart){
        $this->BodyPart=$BodyPart;
    }
    public function GetEngineStatus(){return $this->EngineStatus;}
    public function GetBodyPart(){return $this->BodyPart;}
}