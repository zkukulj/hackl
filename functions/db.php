<?php
class DbHandle
{
  private $host = 'localhost';
  private $db_name = 'hackl';
  private $username = 'root';
  private $password = 'root';
  // private $port = 3307;
  private $port = 3306;
  private $conn;

  public function __construct()
  {

    if (!defined('DOCUMENT_ROOT')) {
      define('DOCUMENT_ROOT', $_SERVER["DOCUMENT_ROOT"] . "/hackaton");
    }

    try {
      $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name};port={$this->port}", $this->username, $this->password, [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
        PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => false
      ]);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }

  public function readOne($sql, $d)
  {
    try {
      $stmt = $this->conn->prepare($sql);
      $stmt->execute($d);
      return $stmt->fetch();
    } catch (PDOException $e) {
      return "Err " . $e->getMessage();
    }
  }

  public function read($sql, $data)
  {
    try {
      $stmt = $this->conn->prepare($sql);
      $stmt->execute($data);
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      return "Err " . $e->getMessage();
    }
  }

  public function readObj($sql, $data)
  {
    try {
      $stmt = $this->conn->prepare($sql);
      $stmt->execute($data);
      return $stmt->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
      return "Err " . $e->getMessage();
    }
  }
}
