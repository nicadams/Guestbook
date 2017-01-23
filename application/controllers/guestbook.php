<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guestbook extends CI_Controller {
  public function __construct() {
    parent::__construct();
   $this->load->helper('url');

 }
  public function index() {
    // $this->load->database();
    $data = array();
    $data["posted"] = false;
    $this->load->model('Guestbook_model');
    // $this->input->post("post_name");
    if( $this->input->post("submit") ) {
      $data = array(
      "name" => $this->input->post("name"),
      "email" => $this->input->post("email"),
      "comment" => $this->input->post("comment")
      );
    }
    // if ($this->Guestbook_model->insert( $data ) ) {
    //   $data["posted"] = true;
    // }
  $data["entries"] = $this->Guestbook_model->view();
  $this->load->view("guestbook", $data);
 }
}
?>