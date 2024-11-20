<?php
function addActionController($request,$response,$container){
    $songs= $container->songs();
    // print_r($_POST);
    // print_r($_FILES);
    // die();
    $directory= "uploads/";
    $name=$request->get(INPUT_POST,"inputName");
    $artist=$request->get(INPUT_POST,"inputArtist");
    $temp=$request->get("FILES","inputSong");
    // print_r(htmlspecialchars($temp["name"]));
    // die();
    $song_url=$directory.$temp["name"];
    
    $songs->add($name,$artist,$song_url);
    $response->redirect("location:index.php");
    return $response;
}