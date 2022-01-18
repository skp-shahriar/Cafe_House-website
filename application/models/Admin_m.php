<?php
class Admin_m extends CI_Model
{
    public function login($data)
    {
        $this->db->where('email',$data['email']);
        $this->db->where('password',$data['password']);
        $a=$this->db->get('admin');
        return $a->row();
    }
    public function general()
    {
        $general= $this->db->get('general');
        return $general->row();
    }
    public function edit_general($data)
    {
        if ($this->db->update('general',$data)) {
            return true;
        }else {
            return false;
        }
    }
    public function about()
    {
        $about= $this->db->get('about');
        return $about->row();
    }
    public function edit_about($data)
    {
        if ($this->db->update('about',$data)) {
            return true;
        }else {
            return false;
        }
    }
    public function service()
    {
        $service= $this->db->get('service');
        return $service->result();
    }
    public function edit_service($id)
    {
        $this->db->where('id',$id);
        $data=$this->db->get('service');
        return $data->row();
    }
    public function update_service($data,$id)
    {
        $this->db->where('id',$id);
        if ($this->db->update('service',$data)) {
            return true;
        }else {
            return false;
        }
    }
    public function delete_service($id)
    {
        $this->db->where('id',$id);
        if ($this->db->delete('service')) {
            return true;
        }else {
            return false;
        }
    }
    public function menu()
    {
        $menu= $this->db->get('menu');
        return $menu->result();
    }
    public function edit_menu($id)
    {
        $this->db->where('id',$id);
        $data=$this->db->get('menu');
        return $data->row();
    }
    public function update_menu($data,$id)
    {
        $this->db->where('id',$id);
        if ($this->db->update('menu',$data)) {
            return true;
        }else {
            return false;
        }
    }
    public function delete_menu($id)
    {
        $this->db->where('id',$id);
        if ($this->db->delete('menu')) {
            return true;
        }else {
            return false;
        }
    }
    public function add_menu_item($data)
    {
        if ($this->db->insert('menu',$data)){
        return true;
        }else {
            return false;
        }
    }
}

?>