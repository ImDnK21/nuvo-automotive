<?php
class Database {
  public static function connect() {
    $db = new mysqli('localhost', 'root', 'root', 'nuvo-automotive');
    // $db = new mysqli('sql102.epizy.com', 'epiz_31734797', 'B0gzzWNrrC', 'epiz_31734797_nuvo_automotive');
    $db->query("SET NAMES 'utf8'");
    return $db;
  }
}
