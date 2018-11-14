<?php
require('connect.php');
      class Actor extends Person{
        function getAllActors(){
          $stmt = $bdd->prepare("SELECT * FROM MovieHasPerson WHERE role='actor'");
          $stmt->execute();
          $actors = $stmt->fetchAll();
          return $actors;
        }
      }
