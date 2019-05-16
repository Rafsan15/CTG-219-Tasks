<?php


interface IMobileService
{
    function InsertRow($model);
    function UpdateRow($model);
    function DeleteRow($id);
    function GetById($id);
    function GetAll();
    function GetByPrice($price);
}