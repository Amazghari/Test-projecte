<?php

// UserPDO class to handle user operations in the database using PDO.
class songs
{
    // Private property to store the PDO connection.
    private PDO $sql;

    // Constructor that receives the PDO connection to interact with the database.
    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }

    public function add($name,$artist,$song_url){
        $query="insert into songs (name,artist,song_url) values('{$name}','{$artist}','{$song_url}');";
        $stm = $this->sql->prepare($query);
        $stm->execute();
    }

    public function edit($id,$name,$artist,$song_url){
        $query="update songs set name='{$name}',artist='{$artist}', song_url='{$song_url}' where id={$id};";
        $stm = $this->sql->prepare($query);
        $stm->execute();
    }
    public function list(){
        $query="select * from songs;";
        $songs=[];
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $song){
            $songs[$song["id"]]=$song;
        }
        return $songs;
    }

    public function delete($id){
        $query="delete from songs where id={$id};";
        $stm = $this->sql->prepare($query);
        $stm->execute();
    }
}