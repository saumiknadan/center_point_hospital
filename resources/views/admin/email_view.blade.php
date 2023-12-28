<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.head')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                      <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Add Doctors</h4>
                            <p class="card-description"> Basic form elements </p>
                            <form class="forms-sample"  action="{{url('/doctors/')}}" method="post" enctype="multipart/form-data">
                              @csrf
                              <fieldset>
                                <div class="form-group">
                                  <label for="exampleInputName1">Greeting</label>
                                  <input type="text" class="form-control" id="exampleInputName1" name="greeting" required>
                                </div>
  
                                <div class="form-group">
                                  <label for="exampleInputSpeciality">Body</label>
                                  <input type="text" class="form-control" id="exampleInputSpeciality" name="body" placeholder="Speciality" required>
                                </div>
  
                                <div class="form-group">
                                  <label for="room">Action Text</label>
                                  <input type="number" class="form-control" id="room" name="actiontext" placeholder="room">
                                </div>
  
                                <div class="form-group">
                                  <label for="mobile">Action URL</label>
                                  <input type="number" class="form-control" id="mobile" name="actionurl" placeholder="mobile">
                                </div>
                                
                                <div class="form-group">
                                    <label for="mobile">End Part</label>
                                    <input type="number" class="form-control" id="mobile" name="endpart" placeholder="mobile">
                                  </div>
                                
                                
  
                                
  
                                
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <a href="{{url('/doctors/')}}" class="btn btn-danger">Cancel</a>
                      
                              </fieldset>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script')

  </body>
</html>
