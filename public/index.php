<?php

include "../src/config.php";

include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";
include "../src/models/Db.php";
include "../src/ProjectContainer.php";
include "../src/models/songs.php";


$request = new \Emeset\Request();
$response = new \Emeset\Response();
$container = new ProjectContainer($config);
$sql = new Db($config);
$songs = new songs($sql->get());

/* 
  * Aquesta és la part que fa que funcioni el Front Controller.
  * Si no hi ha cap paràmetre, carreguem la pàgina d'inici.
  * Si hi ha paràmetre, carreguem la pàgina que correspongui.
  * Si no existeix la pàgina, carreguem la pàgina d'error.
  */
$r = '';
if (isset($_REQUEST["r"])) {
  $r = $_REQUEST["r"];
}

/* Front Controller, aquí es decideix quina acció s'executa */
if ($r == "") {
  include "../src/controllers/indexController.php";
  $response = indexController($request, $response, $container);
} else if ($r == "add") {
  include "../src/controllers/addController.php";
  $response = addController($request, $response, $container);
}
else if($r=="addAction"){
  include "../src/controllers/addActionController.php";
  $response=addActionController($request,$response,$container);
}
else if($r=="editSong"){
  include "../src/controllers/editSongController.php";
  $response=editSongController($request,$response,$container);
}
else if($r=="deleteSong"){
  include "../src/controllers/deleteSongController.php";
  $response=deleteSongController($request,$response,$container);
}

/* Enviem la resposta al client. */
$response->response();
