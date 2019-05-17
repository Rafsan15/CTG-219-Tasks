<?php


class Comments
{
    private $Id;
    private $Comment;
    private $Email;
    private $MobileId;

    public function SetId($id){$this->Id=$id;}
    public function SetComment($comment){$this->Comment=$comment;}
    public function SetEmail($email){$this->Email=$email;}
    public function SetMobileId($mobileId){$this->MobileId=$mobileId;}

    public function GetId(){return $this->Id;}
    public function GetComment(){return $this->Comment;}
    public function GetEmail(){return $this->Email;}
    public function GetMobileId(){return $this->MobileId;}
}