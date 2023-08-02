<?php

class Portofolio extends Controller {
    public function index()
    {
        $data['judul'] = 'Portofolio';
        $model = $this->model('Dashboard_event_model');
        $data['event'] = $model->getAllEvent();

        if (empty($data['event'])) {
            die('Tidak ada data portofolio.');
        }

        $this->view('templates/header', $data);
        $this->view('portofolio/index', $data);
        $this->view('templates/footer');
    }
}

?>