<?php
  //class wrapper for sql operations
  class SQL {
    private $host;
    private $username;
    private $password;
    private $database;
    public $wired;

    //constructor
    public function __construct($host, $username, $password, $database) {
      $this -> host = $host;
      $this -> username = $username;
      $this -> password = $password;
      $this -> database = $database;
      $this -> wired = $this -> connect();
    }

    //handle connections
    public function connect() {
      $my = new mysqli($this -> host, $this -> username, $this -> password, $this -> database);
      if(!$my -> connect_error) return $my;
      else die('connection failed: ' . $my -> connect_error);
    }
  }
?>
