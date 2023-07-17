<?php 

class DashboardEvent extends Controller {

    public function index()
    {
        $data['judul'] = 'Daftar Event';
        $data['event'] = $this->model('Dashboard_event_model')->getAllEvent();
        $this->view('template-admin/header', $data);
        $this->view('template-admin/sidebar', $data);
        $this->view('dashboard/event/index', $data);
        $this->view('template-admin/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Event';
        $data['event'] = $this->model('Event_model')->getEventById($id);
        $this->view('template-admin/header', $data);
        $this->view('template-admin/sidebar', $data);
        $this->view('dashboard/event/index', $data);
        $this->view('template-admin/footer');
    }

    public function create() {
        $data['judul'] = 'Daftar Event';
        $data['event'] = $this->model('Dashboard_event_model')->getAllEvent();
        $this->view('template-admin/header', $data);
        $this->view('template-admin/sidebar', $data);
        $this->view('dashboard/event/create', $data);
        $this->view('template-admin/footer');
    }

    public function tambah()
    {
        if( $this->model('Dashboard_event_model')->tambahDataEvent($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/DashboardEvent');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/DashboardEvent');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Dashboard_event_model')->hapusDataEvent($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/DashboardEvent');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/DashboardEvent');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Dashboard_event_model')->getEventById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Dashboard_event_model')->ubahDataEvent($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/DashboardEvent');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/DashboardEvent');
            exit;
        } 
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Event';
        $data['event'] = $this->model('Dashboard_event_model')->cariDataEvent();
        $this->view('template-admin/header', $data);
        $this->view('template-admin/sidebar', $data);
        $this->view('dashboard/event/index', $data);
        $this->view('template-admin/footer');
    }
}