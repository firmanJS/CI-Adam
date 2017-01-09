<?php

class News_m extends CI_Model{
    function save($data)
    {
        return $this->db->insert('people',$data);
    }
    function get_data()
    {
        return $this->db->get('people');
    }
    function show_data($id_people)
    {
        $this->db->where('id_people', $id_people);
        return $this->db->get('people');
    }
    function update_data($id_people,$data)
    {
        $this->db->where('id_people', $id_people);
        return $this->db->update('people', $data);
    }

}