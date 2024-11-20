$(document).ready(function () {
    $("#editSongbutton").submit(function(e) {
        e.preventDefault();
        const formData = new FormData();
        var songId = $(this).data("id");
        formData.append(songId);
        formData.append("editName", $("#editName").val());
        formData.append("editArtist", $("#editArtist").val());
        var files = $("#editSong")[0].files;
        for (var i = 0; i < files.length; i++) {
            formData.append("editSong[]", files[i]);
        }
       
        $.ajax({
            url: 'index.php?r=editSong',
            type: 'POST',
            data: formData,
            // processData: false,
            // contentType: false, 
            success: function(response) {
                
            },
            error: function() {
                alert('Error al enviar los datos.');
            }
        })
    });


    $(document).on('click', '#deleteButton', function(){
        console.log("+++");
        var eventId = $(this).data("id");
        console.log(eventId);
        const formData = {
            id: eventId,
        }
        let confirmation= "De verdad que quieres borrar la cancion?";

        if(confirm(confirmation)){

            $.ajax({
                url: 'index.php?r=deleteSong',
                type: 'POST',
                data: formData,
                success: function () {
                        console.log(eventId);
                        $("#song"+eventId).remove();
              }
        
            });
    }
    });

    document.addEventListener("DOMContentLoaded", function() {
        var cancion=document.getElementById("cancionActual");
        document.getElementById('playButton').addEventListener('click', () => 

            
            audio.play());
        document.getElementById('pauseButton').addEventListener('click', () => audio.pause());
        document.getElementById('silencia').addEventListener('click', () => audio.muted = !audio.muted);
    });

});