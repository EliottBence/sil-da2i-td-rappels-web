<?php
require_once('personModel.php');
require_once('connect.php');
    class Director extends Person{
      public function getAllDirectors(){
        global $bdd;
        $stmt = $bdd->prepare("SELECT * FROM MovieHasPerson WHERE role='director'");
        $stmt->execute();
        $directors = $stmt->fetchAll();
        return $directors;
      }
    }
