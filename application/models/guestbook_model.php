<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guestbook_model extends Model {
  function __construct() {
   parent::Model();
   $this->load->database();
   }

  function view() {
   $sql = "SELECT * FROM ". $this->table ." ORDER BY comment_id DESC";
   $query = $this->db->query( $sql );
   return $query->result_array();
  }

  function insert( $data = array() ) {
   $data["name"] = $this->db->escape_str($data["name"]);
   $data["url"] = $this->db->escape_str($data["email"]);
   $data["comment"] = $this->db->escape_str($data["comment"]);
   $data["name"] = htmlspecialchars( $data["name"] );
   $data["url"] = htmlspecialchars( $data["email"] );
   $data["comment"] = htmlspecialchars( $data["comment"] );
   $sql = "INSERT INTO ". $this->table ." (comment_id, name, email, comment) VALUES ('null', '". $data["name"] ."', '". $data["url"] ."', '". $data["comment"] ."')";
   return $this->db->query( $sql );
  }
}
?>