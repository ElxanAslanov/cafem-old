<?php
class Cafe_model extends CI_Model{
    public function insertdata($data)
    {
        $this->db->insert("place",$data);
    }

    public function getInfo()
    {
        return $this->db->order_by('id','DESC')->get('place')->result_array() ;
    }

    public function getCafe($id)
    {
        return $this->db->where('id',$id)->get('place')->row_array() ;
    }

    public function delete_tableee($id)
    {
        $this->db->where('id',$id)->delete("place");
    }


}