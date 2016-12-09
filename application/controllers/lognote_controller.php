<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class lognote_controller extends CI_Controller {

    public function get_lognote_c(){
        $this->load->model('lognote_model');
        $lognote['lognote'] = $this->lognote_model->get_lognote();
        $this->load->view('lognote_form',$lognote);
    }




}