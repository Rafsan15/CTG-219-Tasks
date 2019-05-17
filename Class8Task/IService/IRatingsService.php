<?php


interface IRatingsService
{
    function InsertRatings($model);
    function CountById($id);
}