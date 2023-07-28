<?php
class Faq extends Controller
{
    public function index() {
        $data['judul'] = 'Home';
        // $data['Faq'] = $this->model('Faq_model')->getFaq();
        $this->view('templates/header', $data);
        $this->view('faq/index', $data);
        $this->view('templates/footer');
    }

}
?>
