<?php
function deleteSongController($request,$response,$container){
    $songs=$container->songs();
    $id=$request->get(INPUT_POST,"id");
    $songs->delete($id);
}