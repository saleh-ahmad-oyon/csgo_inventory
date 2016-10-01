<?php
class Achievements_model extends CI_Model 
{
    public function getAchievements()
    {
        $query = $this->db
            ->order_by('date', 'DESC')
            ->get('achievements');

        return $query->result_array();
    }
}
