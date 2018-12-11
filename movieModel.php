<?php
require('connect.php');
    class Movie{
      public function getAllMovies(){
        global $bdd;
        $stmt = $bdd->prepare("SELECT * FROM movie ORDER BY title ASC");
        $stmt->execute();
        $movies = $stmt->fetchAll();
        return $movies;
      }

      public function getBaseInfos($id){
        global $bdd;
        $stmt = $bdd->prepare("SELECT * FROM movie WHERE id=".$id);
        $stmt->execute();
        $res = $stmt->fetch();
        return $res;
      }

    }
