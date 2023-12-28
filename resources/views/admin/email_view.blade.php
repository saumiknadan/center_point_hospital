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
                            <h4 class="card-title">Send Email</h4>
                            
                            <form class="forms-sample"  action="{{url('/sendemail/'.$data->id)}}" method="post" >
                              @csrf
                              <fieldset>
                                <div class="form-group">
                                  <label >Greeting</label>
                                  <input type="text" class="form-control"  name="greeting" >
                                </div>
  
                                <div class="form-group">
                                  <label >Body</label>
                                  <input type="text" class="form-control" name="body">
                                </div>
  
                                <div class="form-group">
                                  <label >Action Text</label>
                                  <input type="text" class="form-control" name="actiontext" >
                                </div>
  
                                <div class="form-group">
                                  <label >Action URL</label>
                                  <input type="text" class="form-control"  name="actionurl" >
                                </div>
                                
                                <div class="form-group">
                                    <label >End Part</label>
                                    <input type="text" class="form-control"  name="endpart" >
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
