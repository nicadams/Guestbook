<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guestbook_model extends CI_Model {
  public $name;
  public $email;
  public $comment;

  public function __construct() {
    parent::__construct();
  }

  public function view() {
    $sql = "SELECT * FROM ". $this->table ." ORDER BY comment_id DESC";
    $query = $this->db->get( $sql );
    return $query->result_array();
  }

  public function insert( $data = array() ) {
    // echo 'console.log('. json_encode( $data ) .')';
    $data["name"] = $this->db->escape_str($data["name"]);
    $data["email"] = $this->db->escape_str($data["email"]);
    $data["comment"] = $this->db->escape_str($data["comment"]);
    $data["name"] = htmlspecialchars( $data["name"] );
    $data["email"] = htmlspecialchars( $data["email"] );
    $data["comment"] = htmlspecialchars( $data["comment"] );
    $sql = "INSERT INTO ". $this->table ." (comment_id, name, email, comment) VALUES ('null', '". $data["name"] ."', '". $data["email"] ."', '". $data["comment"] ."')";
   return $this->db->query( $sql );
  }
}
?>