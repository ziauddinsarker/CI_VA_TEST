<?php 
class ajax_demo extends CI_Controller {
 
  function index() {
    $this->load->model('nodes_m');
 
    $data['view'] = 'ajax_index';
    $data['node_list'] = $this->nodes_m->get_node_list();
    $this->load->view('template',$data);
  }
 
  function give_more_data() {
    if (isset($_POST['type'])) {
      $this->load->model('nodes_m');
      $data['ajax_req'] = TRUE;
      $data['node_list'] = $this->nodes_m->get_node_by_type($_POST['type']);
      $this->load->view('ajax_index',$data);
    }
  }
   
}