<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skin extends CI_Controller {
    public function index()
    {
        //$this->load->view('welcome_message');
    }
    public function pistol($id)
    {
        $data['name'] = $id;
        $data['title'] = 'Pistol';
        $this->load->view('pistol_view', $data);
    }
    public function rifle($id){
        $data['name'] = $id;
        $data['title'] = 'Rifle';
        $this->load->view('rifle_view', $data);
    }
    public function smg($id)
    {
        $data['name'] = $id;
        $data['title'] = 'SMG';
        $this->load->view('smg_view', $data);
    }
    public function heavy($id)
    {
        $data['name'] = $id;
        $data['title'] = 'Heavy';
        $this->load->view('heavy_view', $data);
    }
}
