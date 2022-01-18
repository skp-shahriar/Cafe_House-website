<?php
class Admin_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Admin_m');
    }
    public function index()
    {
        $username = $this->session->userdata('username');
        if (isset($username)) {
            redirect(base_url('Admin_login/dashboard'), 'refresh');
        } else {
            $this->load->view('admin/login');
        }
    }
    public function login()
    {
        $data = $this->input->post();
        $admin = $this->Admin_m->login($data);
        if (!empty($admin)) {
            $this->session->set_userdata('username', $admin->name);
            redirect(base_url('Admin_login/dashboard'), 'refresh');
        } else {
            redirect(base_url('Admin_login'), 'refresh');
        }
    }
    public function dashboard()
    {
        $username = $this->session->userdata('username');
        if (isset($username)) {
            $data['username'] = $username;
            $data['page'] = 'General';
            $data['general'] = $this->Admin_m->general();

            $this->load->view('admin/admin_head');
            $this->load->view('admin/admin_side', $data);
            $this->load->view('admin/dashboard', $data);
            $this->load->view('admin/admin_foot');
        } else {
            redirect(base_url('Admin_login'), 'refresh');
        }
    }
    public function edit_general()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('od_1', 'Open-Day 1', 'required');
        $this->form_validation->set_rules('oh_1', 'Open-Hour 1', 'required');
        $this->form_validation->set_rules('od_2', 'Open-Day 2', 'required');
        $this->form_validation->set_rules('oh_2', 'Open-Hour 2', 'required');
        if ($this->form_validation->run() == FALSE) {

            $username = $this->session->userdata('username');
            $data['username'] = $username;
            $data['page'] = 'General';
            $data['general'] = $this->Admin_m->general();

            $this->load->view('admin/admin_head');
            $this->load->view('admin/admin_side', $data);
            $this->load->view('admin/dashboard', $data);
            $this->load->view('admin/admin_foot');
        } else {
            $data = $this->input->post();
            $this->Admin_m->edit_general($data);
            redirect(base_url('Admin_login/dashboard'), 'refresh');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect(base_url('Admin_login'), 'refresh');
    }
    public function about()
    {
        $username = $this->session->userdata('username');
        if (isset($username)) {
            $data['username'] = $username;
            $data['page'] = 'About';
            $data['about'] = $this->Admin_m->about();

            $this->load->view('admin/admin_head');
            $this->load->view('admin/admin_side', $data);
            $this->load->view('admin/admin_about', $data);
            $this->load->view('admin/admin_foot');
        } else {
            redirect(base_url('Admin_login'), 'refresh');
        }
    }
    public function edit_About()
    {
        $this->form_validation->set_rules('story_head', 'Story Head', 'required');
        $this->form_validation->set_rules('story_details', 'Story Details', 'required');
        $this->form_validation->set_rules('vision_details', 'Vision Details', 'required');
        $this->form_validation->set_rules('vision_p1', 'Vision Point 1', 'required');
        $this->form_validation->set_rules('vision_p2', 'Vision Point 2', 'required');
        $this->form_validation->set_rules('vision_p3', 'Vision Point 3', 'required');
        // $this->form_validation->set_rules('img', 'Image', 'required');

        if ($this->form_validation->run() == FALSE) {

            $username = $this->session->userdata('username');
            $data['username'] = $username;
            $data['page'] = 'About';
            $data['about'] = $this->Admin_m->about();

            $this->load->view('admin/admin_head');
            $this->load->view('admin/admin_side', $data);
            $this->load->view('admin/admin_about', $data);
            $this->load->view('admin/admin_foot');
        } else {
            $config['upload_path']          = './assets/img/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['encrypt_name']        = true;
            $config['max_size']             = 300;
            $config['max_width']            = 600;
            $config['max_height']           = 600;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('img')) {
                $this->session->set_flashdata('about_img', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');

                redirect(base_url('Admin_login/about'), 'refresh');
            } else {

                $data = $this->input->post();
                $data['img'] = $this->upload->data('file_name');
                $this->Admin_m->edit_about($data);
                redirect(base_url('Admin_login/about'), 'refresh');
            }
        }
    }
    public function service()
    {
        $username = $this->session->userdata('username');
        if (isset($username)) {
            $data['username'] = $username;
            $data['page'] = 'Service';
            $data['service'] = $this->Admin_m->service();

            $this->load->view('admin/admin_head');
            $this->load->view('admin/admin_side', $data);
            $this->load->view('admin/admin_service', $data);
            $this->load->view('admin/admin_foot');
        } else {
            redirect(base_url('Admin_login'), 'refresh');
        }
    }
    public function edit_service($id)
    {
        $username = $this->session->userdata('username');
        if (isset($username)) {
            $data['username'] = $username;
            $data['page'] = 'Service';

            $this->load->view('admin/admin_head');
            $this->load->view('admin/admin_side', $data);
            $data['service'] = $this->Admin_m->edit_service($id);
            $this->load->view('admin/admin_service_edit', $data);

            $this->load->view('admin/admin_foot');
        } else {
            redirect(base_url('Admin_login'), 'refresh');
        }
    }
    public function update_service($id)
    {
        $this->form_validation->set_rules('head', 'Head', 'required');
        $this->form_validation->set_rules('details', 'Details', 'required');
        // $this->form_validation->set_rules('img', 'img', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == FALSE) {
            $username = $this->session->userdata('username');
            $data['username'] = $username;
            $data['page'] = 'Service';

            $this->load->view('admin/admin_head');
            $this->load->view('admin/admin_side', $data);
            $data['service'] = $this->Admin_m->edit_service($id);
            $this->load->view('admin/admin_service_edit', $data);

            $this->load->view('admin/admin_foot');
        } else {
            $config['upload_path']          = './assets/img/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['encrypt_name']        = true;
            $config['max_size']             = 100;
            $config['max_width']            = 400;
            $config['max_height']           = 400;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('img')) {
                $this->session->set_flashdata('service_img', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');

                $this->load->library('user_agent');
                redirect($this->agent->referrer(), 'refresh');
                
            } else {

                $data = $this->input->post();
                $data['img'] = $this->upload->data('file_name');
                $id = $this->input->post('id');
                $this->Admin_m->update_service($data, $id);
                redirect(base_url('Admin_login/service'), 'refresh');
            }
        }
    }
    public function delete_service($id)
    {
        $this->Admin_m->delete_service($id);
        redirect(base_url('Admin_login/service'), 'refresh');
    }
    public function menu()
    {
        $username = $this->session->userdata('username');
        if (isset($username)) {
            $data['username'] = $username;
            $data['page'] = 'menu';
            $data['menu'] = $this->Admin_m->menu();

            $this->load->view('admin/admin_head');
            $this->load->view('admin/admin_side', $data);
            $this->load->view('admin/admin_menu', $data);
            $this->load->view('admin/admin_foot');
        } else {
            redirect(base_url('Admin_login'), 'refresh');
        }
    }
    public function edit_menu($id)
    {
        $username = $this->session->userdata('username');
        if (isset($username)) {
            $data['username'] = $username;
            $data['page'] = 'menu';

            $this->load->view('admin/admin_head');
            $this->load->view('admin/admin_side', $data);
            $data['menu'] = $this->Admin_m->edit_menu($id);
            $this->load->view('admin/admin_menu_edit', $data);

            $this->load->view('admin/admin_foot');
        } else {
            redirect(base_url('Admin_login'), 'refresh');
        }
    }
    public function update_menu($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('details', 'Details', 'required');
        $this->form_validation->set_rules('type', 'type', 'required');
        $this->form_validation->set_rules('price', 'price', 'required|integer');
        // $this->form_validation->set_rules('img', 'Imgage', 'required');

        if ($this->form_validation->run() == FALSE) {
            $username = $this->session->userdata('username');
            $data['username'] = $username;
            $data['page'] = 'menu';

            $this->load->view('admin/admin_head');
            $this->load->view('admin/admin_side', $data);
            $data['menu'] = $this->Admin_m->edit_menu($id);
            $this->load->view('admin/admin_menu_edit', $data);

            $this->load->view('admin/admin_foot');
        } else {
            $config['upload_path']          = './assets/img/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['encrypt_name']        = true;
            $config['max_size']             = 5000;
            $config['max_width']            = 1000;
            $config['max_height']           = 1000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('img')) {
                $this->session->set_flashdata('menu_img', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');

                $this->load->library('user_agent');
                redirect($this->agent->referrer(), 'refresh');
            } else {

                $data = $this->input->post();
                $data['img'] = $this->upload->data('file_name');
                $id = $this->input->post('id');
                $this->Admin_m->update_menu($data, $id);
                redirect(base_url('Admin_login/menu'), 'refresh');
            }
        }
    }
    public function delete_menu($id)
    {
        $this->Admin_m->delete_menu($id);
        redirect(base_url('Admin_login/menu'), 'refresh');
    }
    public function add_menu()
    {
        $username = $this->session->userdata('username');
        if (isset($username)) {
            $data['username'] = $username;
            $data['page'] = 'menu';

            $this->load->view('admin/admin_head');
            $this->load->view('admin/admin_side', $data);
            $this->load->view('admin/add_menu');
            $this->load->view('admin/admin_foot');
        } else {
            redirect(base_url('Admin_login'), 'refresh');
        }
    }
    public function add_menu_item()
    {
        $data = $this->input->post();
        $this->Admin_m->add_menu_item($data);
        redirect(base_url('Admin_login/menu'), 'refresh');
    }
}
