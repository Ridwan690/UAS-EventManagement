        <header class="bg-grad-day-tripper mt70">

            <div class="container">
                <div class="row mt20 mb30">
                    <div class="col-md-12 text-center">
                        <h3 class="color-light text-uppercase animated" data-animation="fadeInUp" data-animation-delay="100">Create Your Event<small class="color-light alpha7">For your bla bla bla</small></h3>
                    </div>
                </div>
            </div>

        </header>
        
        <!-- Form Styles
        ===================================== -->
        <section id="shortcodeForm">
            <div class="container-fluid bg-gray pt40 pb40 bb-dashed-1">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <h4 class="text-center mb20">Create Event</h4>
                                <form class="form-horizontal" action="<?= BASEURL; ?>/Event/tambah" method="post" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" name="title" required>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="3" name="deskripsi" required></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Venue</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="venue" name="venue" required>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-10">
                                      <input type="date" class="form-control" name="date" required>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Start Time</label>
                                    <div class="col-sm-10">
                                      <input type="time" class="form-control" name="time" required>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Max Participant</label>
                                    <div class="col-sm-10">
                                      <input type="number" class="form-control" name="number_of_participants" required>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control-file" id="images" name="images[]" multiple required>
                                        <small class="form-text text-muted">First image for your event Tumbnail & min 1 foto</small>
                                        <small class="form-text text-muted">Select multiple images for the event (Hold Ctrl/Cmd to select multiple images)</small>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="button button-md button-yellow">Create Event</button>
                                    </div>
                                  </div>
                                </form>
                            </div>
                        </div>    
                    </div>                   
                    
                </div>
            </div>             
        </section>