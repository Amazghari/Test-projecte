<?php 
// print_r($songs);
// die();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WEBAMP</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap-icons">
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/script.js"></script>
  <script src=js/jquery-3.7.1.min.js></script>
</head>

<body>
  <div class="container">
    <p class="alert alert-primary">WEBAMP </p>
  </div>
 
  <div
    class="container-fluid"
  >
    <div
      class="row justify-content-start align-items-center g-2"
    >
      <div class="col">
      <div class="container mt-8">

<h2>Lista de Canciones</h2>
<div class=table-responsive>
<table class="table table-responsive-stack" aria-label="Lista canciones">
      <?php foreach($songs as $song){?>
          <tr id="song<?=$song["id"]?>">
          <td>
          <p id="textoDesc"> <?=$song["NAME"]."(".$song["artist"].")"?> </p>
          <a name="play" id="playButton" class="btn btn-primary" href="#" role="button">reproducir</a>
          <a name="play" id="pauseButton" class="btn btn-primary" href="#" role="button">pausa</a>
          <button data-bs-toggle="modal" data-bs-target="#editarCancionModal" data-id="<?=$song["id"]?>" id="editButton" class="btn  btn-secondary">Editar</button>
          <button id="deleteButton" data-id="<?=$song["id"]?>" class="btn btn-sm btn-danger">Borrar<i class="bi bi-trash"></i></button>
          </td>
          </tr>
       

    <?php } ?>
    </table>
</div>

</div>
      </div>
      <div class="col">Column</div>
      <div class="col">
        <p id="nameActual">actual</p>
      </div>
    </div>

    <div class="form-check">
      <input
        class="form-check-input"
        type="checkbox"
        value=""
        id="silencia"
        checked
      />
      <label class="form-check-label" for=""> Silencia</label>
    </div>
    
  </div>
  <audio id="cancionActual" src=<?=$song["song_url"]?>>
  <a href="index.php?r=add">Añadir cancion</a>
  </div>
  
  <div class="modal fade" id="editarCancionModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Cancion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editarCancion">
                        <input type="hidden" name="r" value="editSong">
                    <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" id="editName" name="editName" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" id="editTitle" name="editDtitle" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Cancion</label>
                            <input type="file" id="editSong" name="editSong" class="form-control" accept="audio/*"  requiered>
                        </div>

                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tancar</button>
                    <input type="submit" id ="editSongbutton"class="btn btn-primary" data-bs-dismiss="modal">
                </div>
            </div>
        </div>
    </div>

  
  <script src="js/bootstrap.bundle.min.js"></script>
  
</body>

</html>