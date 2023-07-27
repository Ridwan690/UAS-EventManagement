<?php 

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['event'] = $this->model('Dashboard_event_model')->getLatestEvents();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}