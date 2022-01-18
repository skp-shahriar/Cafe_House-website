<?php
class Coffee_m extends CI_Model
{
    public function general()
    {
        $general= $this->db->get('general');
        return $general->row();
    }
    public function about()
    {
        $about= $this->db->get('about');
        return $about->row();
    }
    public function service()
    {
        $service= $this->db->get('service');
        return $service->result();
    }
    public function menu()
    {
        $menu= $this->db->get('menu');
        return $menu->result();
    }
    public function client()
    {
        $client= $this->db->get('client');
        return $client->result();
    }

}

?>