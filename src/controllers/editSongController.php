<?php
function editSongController($request,$response,$container){
    $songs=$container->songs();

    $directory= "uploads/";
    $name=$request->get(INPUT_POST,"editName");
    $artist=$request->get(INPUT_POST,"editArtist");
    $temp=$request->get("FILES","editSong");
    $song_url=$directory.$temp["name"];

}