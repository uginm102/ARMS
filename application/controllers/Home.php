<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Description of Index
 *
 * @author Eugene
 */
class Home extends CI_Controller {
    
    public function index() {
        $data = array(
            'title' => 'Home --',
            'action' => 'Home page'
            );
        $this->template->load('default', 'landingPage', $data);
    }
}
?>