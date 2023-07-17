<?php 

class Dashboard_event_model {
    private $table = 'event';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllEvent()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getEventById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataEvent($data)
    {
        $query = "INSERT INTO event (title, deskripsi, venue, date, time, number_of_participants)
                VALUES (:title, :deskripsi, :venue, :date, :time, :number_of_participants)";
        
        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('venue', $data['venue']);
        $this->db->bind('date', $data['date']);
        $this->db->bind('time', $data['time']);
        $this->db->bind('number_of_participants', $data['number_of_participants']);

        $this->db->execute();

        // Dapatkan ID event yang baru saja dimasukkan
        $event_id = $this->db->getLastInsertId();

        // Simpan setiap gambar ke dalam tabel "image"
        $queryImage = "INSERT INTO image (event_id, image) VALUES ";

        // Loop untuk setiap gambar yang diunggah
        foreach ($data['images'] as $image) {
            $queryImage .= "(:event_id, :image), ";
            $this->db->bind('event_id', $event_id);
            $this->db->bind('image', $image);
        }

        // Hapus tanda koma terakhir
        $queryImage = rtrim($queryImage, ', ');

        $this->db->query($queryImage);
        $this->db->execute();


        return $this->db->rowCount();
    }



    public function hapusDataEvent($id)
    {
        $query = "DELETE FROM event WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataEvent($data)
    {
        $query = "UPDATE 'event' SET
                    title = :title,
                    deskripsi = :deskripsi,
                    venue = :venue,
                    number_of_participants = :number_of_participants
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('venue', $data['venue']);
        $this->db->bind('number_of_participants', $data['number_of_participants']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataEvent()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM 'event' WHERE title LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}