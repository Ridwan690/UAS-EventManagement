<?php
class FAQController extends Controller
{
    public function showFAQ()
    {
        $faqs = $this->getFAQData(); 

        // Load view
        include '../views/faq/index.php';
    }

    private function getFAQData()
{
    return array(
        array(
            'question' => 'Apa itu acara Event Management?',
            'answer' => 'Event Management adalah sebuah platform yang menyediakan jasa manajemen acara profesional untuk berbagai jenis acara. Kami membantu menyelenggarakan acara mulai dari pernikahan, konferensi, pameran, hingga konser musik.',
        ),
        array(
            'question' => 'Bagaimana cara mendaftar sebagai penyelenggara acara?',
            'answer' => 'Untuk mendaftar sebagai penyelenggara acara, kunjungi halaman "Registrasi" dan lengkapi formulir pendaftaran dengan informasi yang diperlukan. Tim kami akan segera menghubungi Anda untuk proses selanjutnya.',
        ),
        array(
            'question' => 'Apakah Event Management menyediakan layanan katering?',
            'answer' => 'Ya, kami menyediakan layanan katering untuk acara Anda. Anda dapat memilih dari berbagai menu dan paket yang kami tawarkan untuk memenuhi kebutuhan acara Anda.',
        ),
        array(
            'question' => 'Berapa lama waktu yang dibutuhkan untuk merencanakan sebuah acara?',
            'answer' => 'Waktu yang dibutuhkan untuk merencanakan sebuah acara dapat bervariasi tergantung pada skala dan kompleksitas acara tersebut. Kami merekomendasikan untuk menghubungi tim kami sesegera mungkin untuk memastikan semua persiapan berjalan dengan lancar.',
        ),
        array(
            'question' => 'Apakah Event Management menerima acara di luar kota?',
            'answer' => 'Ya, kami menerima acara di dalam dan luar kota. Tim kami dapat bekerja dengan Anda untuk mengatur acara di berbagai lokasi sesuai keinginan Anda.',
        ),
    );
}

}
?>
