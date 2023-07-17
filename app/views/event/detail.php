<div class="container mt-5">
    
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $data['event']['title']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['event']['deskripsi']; ?></h6>
        <p class="card-text"><?= $data['event']['venue']; ?></p>
        <p class="card-text"><?= $data['event']['number_of_participants']; ?></p>
        <p class="card-text"><?= $data['event']['title']; ?></p>
        <a href="<?= BASEURL; ?>/event" class="card-link">Kembali</a>
      </div>
    </div>

</div>