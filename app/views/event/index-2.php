<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahDataEvent" data-toggle="modal" data-target="#formModalEvent">
          Tambah Data Event
        </button>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/event/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari event.." name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  
    <div class="row">
        <div class="col-lg-6">
          <h3>Daftar Event</h3>
          <ul class="list-group">
            <?php foreach( $data['event'] as $event ) : ?>
              <li class="list-group-item">
                  <?= $event['title']; ?>
                  <a href="<?= BASEURL; ?>/event/hapus/<?= $event['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                  <a href="<?= BASEURL; ?>/event/ubah/<?= $event['id']; ?>" class="badge badge-success float-right tampilModalUbahEvent" data-toggle="modal" data-target="#formModal" data-id="<?= $event['id']; ?>">ubah</a>
                  <a href="<?= BASEURL; ?>/event/detail/<?= $event['id']; ?>" class="badge badge-primary float-right">detail</a>
              </li>
            <?php endforeach; ?>
          </ul>      
        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModalEvent" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/event/tambah" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="deskripsi">Description</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="venue">Location</label>
            <input type="text" class="form-control" id="venue" name="venue" >
          </div>

          <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="time">Time</label>
            <input type="time" class="form-control" id="time" name="time" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="number_of_participants">Number of Participants</label>
            <input type="number" class="form-control" id="number_of_participants" name="number_of_participants" autocomplete="off">
          </div>
          
          <!-- <div class="form-group">
            <label for="images">Images</label>
            <input type="file" class="form-control-file" id="images" name="images[]" multiple>
          </div>
          <div class="image-preview"></div> -->

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>





