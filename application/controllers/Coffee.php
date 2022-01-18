<?php
class Coffee extends CI_Controller
{
    public function index()
    {
        $data['about']=$this->Coffee_m->about();
        $data['service']=$this->Coffee_m->service();
        $data['menu']=$this->Coffee_m->menu();
        $data['client']=$this->Coffee_m->client();
        $this->load->view('header');
        $this->load->view('home', $data);
        $this->load->view('footer');
    }
    public function about()
    {
        $data['about']=$this->Coffee_m->about();
        $this->load->view('header');
        $this->load->view('about',$data);
        $this->load->view('footer');
    }
    public function service()
    {
        $data['service']=$this->Coffee_m->service();
        $this->load->view('header');
        $this->load->view('service',$data);
        $this->load->view('footer');
    }
    public function contact()
    {
        $this->load->view('header');
        $this->load->view('contact');
        $this->load->view('footer');
    }
    public function menu()
    {
        $data['menu']=$this->Coffee_m->menu();
        $this->load->view('header');
        $this->load->view('menu',$data);
        $this->load->view('footer');
    }
    public function reservation()
    {
        $this->load->view('header');
        $this->load->view('reservation');
        $this->load->view('footer');
    }
    public function testimonial()
    {
        $this->load->view('header');
        $this->load->view('testimonial');
        $this->load->view('footer');
    }
    public function not_found()
    {
        $this->load->view('not_found');
    }
}

?>