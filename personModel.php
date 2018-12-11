<?php
class Person{
  public function getBaseInfos($id){
    global $bdd;
    $stmt = $bdd->prepare("SELECT * FROM person WHERE id=?");
    $stmt->execute(array($id));
    $res = $stmt->fetch();
    return $res;
  }


}
