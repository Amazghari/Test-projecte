<?php

function addController($request,$response,$container){
    
    $response->setTemplate("add.php");
    return $response;
}