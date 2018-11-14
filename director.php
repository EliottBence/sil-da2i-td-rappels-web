<?php
//require('connect.php');
    class Director extends Person{
      public function getAllDirectors(){
        require('connect.php');

        $stmt = $bdd->prepare("SELECT * FROM MovieHasPerson WHERE role='director'");
        $stmt->execute();
        $directors = $stmt->fetchAll();
        return $directors;
      }
    }
