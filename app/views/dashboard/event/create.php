<


    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Event</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Event</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
            <h3 class="card-title">Create Event</h3>
            </div>
            <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="venue" class="col-sm-2 col-form-label">Venue</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="venue" name="venue">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-2 col-form-label">Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="date" name="date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="time" class="col-sm-2 col-form-label">Time</label>
                            <div class="col-sm-10">
                                <input type="time" class="form-control" id="time" name="time">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="number_of_participant" class="col-sm-2 col-form-label">Participants</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="number_of_participant" name="number_of_participant">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Save</button>
                        <a href="<?= BASEURL; ?>/DashboardEvent" class="btn btn-default float-right">Cancel</a>
                    </div>
                <!-- /.card-footer -->
                </form>
            </div>
          </div>
        </div>
      </div>
    </section>