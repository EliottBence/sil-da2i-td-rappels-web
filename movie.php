<?php
    class Movie{
      function getAllMovies(){
        $stmt = $bdd->prepare("SELECT * FROM movie ORDER BY title ASC");
        $stmt->execute();
        $movies = $stmt->fetchAll();
        return $movies;
      }

    }
