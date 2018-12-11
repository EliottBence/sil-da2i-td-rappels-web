<?php
class Person{
  public function getBaseInfos($id){
    global $bdd;
    $stmt = $bdd->prepare("SELECT * FROM person WHERE id=".$id);
    $stmt->execute();
    $res = $stmt->fetch();
    return $res;
  }


}
