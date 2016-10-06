<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skin extends CI_Controller {
    public function index()
    {
        //$this->load->view('welcome_message');
    }
    public function pistol($id)
    {
        $data['name'] = $this->pistolName($id);
        $data['title'] = 'Pistol';
        $data['path'] = $this->pistolPath($id);
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

    private function pistolName($id)
    {
        switch ($id) {
            case 'usps':
                return 'USP-S';
            case 'p2000':
                return 'P2000';
            case 'glock18':
                return 'Glock-18';
            case 'dualBerettas':
                return 'Dual Berettas';
            case 'fiveSeven':
                return 'Five-Seven';
            case 'cz75Auto':
                return 'CZ75-Auto';
            case 'tec9':
                return 'Tec-9';
            case 'p250':
                return 'P250';
            case 'deagle':
                return 'Desert Eagle';
            case 'revolver':
                return 'R8 Revolver';
        }
    }
    private function pistolPath($id)
    {
        switch ($id) {
            case 'usps':
                return '/items/pistols/pistol[@name="usps"]';
            case 'p2000':
                return xpath('/items/pistols/pistol[@name="p2000"]');
            case 'glock18':
                return '/items/pistols/pistol[@name="glock18"]';
            case 'dualBerettas':
                return '/items/pistols/pistol[@name="dualBerettas"]';
            case 'fiveSeven':
                return '/items/pistols/pistol[@name="fiveSeven"]';
            case 'cz75Auto':
                return '/items/pistols/pistol[@name="cz75Auto"]';
            case 'tec9':
                return '/items/pistols/pistol[@name="tec9"]';
            case 'p250':
                return '/items/pistols/pistol[@name="p250"]';
            case 'deagle':
                return '/items/pistols/pistol[@name="dEagle"]';
            case 'revolver':
                return '/items/pistols/pistol[@name="revolver"]';
        }
    }
}
