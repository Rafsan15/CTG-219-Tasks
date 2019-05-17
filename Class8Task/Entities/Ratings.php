<?php


class Ratings
{
    private $Id;
    private $Rating;
    private $MobileId;

    public function SetId($id){$this->Id=$id;}
    public function SetRating($rating){$this->Rating=$rating;}
    public function SetMobileId($mobileId){$this->MobileId=$mobileId;}

    public function GetId(){return $this->Id;}
    public function GetRating(){return $this->Rating;}
    public function GetMobileId(){return $this->MobileId;}

}