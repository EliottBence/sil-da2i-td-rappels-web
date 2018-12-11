<?php
require_once('connect.php');
require_once('personModel.php');


      class Actor extends Person{
        function getAllActors(){
          global $bdd;
          $stmt = $bdd->prepare("SELECT * FROM MovieHasPerson WHERE role='actor'");
          $stmt->execute();
          $actors = $stmt->fetchAll();
          return $actors;
        }
      }
