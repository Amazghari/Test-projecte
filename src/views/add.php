<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Offline Bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main >
        <div class="container">
            <form class="addSong" enctype="multipart/form-data" method="post">
                <input type="hidden" name="r" value="addAction">
                <div class="mb-3 row">
                    <label for="inputName" class="col-4 col-form-label">Nombre</label>
                    <div class="col-8">
                        <input
                            type="text"
                            class="form-control"
                            name="inputName"
                            id="inputName"
                            placeholder="Nombre de la canción" required/>
                    </div>
                    
                </div>
                <div class="mb-3 row">
                    <label for="inputArtist" class="col-4 col-form-label">Artista</label>
                    <div class="col-8">
                        <input
                            type="text"
                            class="form-control"
                            name="inputArtist"
                            id="inputArtist"
                            placeholder="Artista de la cancion" required/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputSong" class="col-4 col-form-label">Archivo de la canción</label>
                    <div class="col-8">
                        <input
                            type="file"
                            class="form-control"
                            name="inputSong"
                            id="inputSong" accept="audio/*" required/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="offset-sm-4 col-sm-8">
                        <button type="submit" class="btn btn-primary">
                            Envia
                        </button>
                    </div>
                </div>
            </form>
        </div>


    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->


    <script
        src="js/bootstrap.min.js"></script>
</body>

</html>