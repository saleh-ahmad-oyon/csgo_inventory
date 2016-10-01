<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Achievements extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('achievements_model');
    }

    public function index()
    {
        $data['name'] = 'achievements';
        $data['title'] = 'Achievements';

        $data['achievements'] = $this->achievements_model->getAchievements();

        $data['type1'] = [];
        $data['type2'] = [];
        $data['type3'] = [];

        foreach ($data['achievements'] as $a) {
            switch ($a['type']) {
                case 1:
                    array_push($data['type1'], $a);
                    break;
                case 2:
                    array_push($data['type2'], $a);
                    break;
                case 3:
                    array_push($data['type3'], $a);
                    break;
            }
        }

        $this->load->view('achievements', $data);
    }
}