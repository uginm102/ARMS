<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Description of Index
 *
 * @author Eugene
 */
class Marks extends CI_Controller {
    
    public function index() {
        $data = array(
            'title' => 'Home --',
            'action' => 'Home page'
            );
        $this->template->load('default', 'landingPage', $data);
    }
    
    public function listMarks() {
        $data = array(
            'title' => 'Marks --',
            'action' => 'List of Marks'
            );
        $this->template->load('default', 'landingPage', $data);
    }
    
    public function add(){
        $data = array(
            'title' => 'Add --',
            'action' => 'New marks'
            );
        $this->template->load('default', 'landingPage', $data);
    }
    
    public function edit(){
        $data = array(
            'title' => 'Home --',
            'action' => 'Editing marks'
            );
        $this->template->load('default', 'landingPage', $data);
    }
    
    public function confirm(){
        $data = array(
            'title' => 'Home --',
            'action' => 'Comfirm marks'
            );
        $this->template->load('default', 'landingPage', $data);
    }
    
    public function delete(){
        $data = array(
            'title' => 'Home --',
            'action' => 'Delete marks'
            );
        $this->template->load('default', 'landingPage', $data);
    }
    
    public function search(){
        $data = array(
            'title' => 'Search --',
            'action' => 'Searched for \'term\''
            );
        $this->template->load('default', 'landingPage', $data);
    }
}
?>