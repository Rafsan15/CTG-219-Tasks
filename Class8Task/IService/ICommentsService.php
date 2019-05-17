<?php


interface ICommentsService
{
    function InsertComments($model);
    function GetById($id);
}