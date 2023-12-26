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
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body">
                                <h2 class="card-title">Appointment Info</h2>
                                <div class="table-responsive">
                                  <table class="table table-dark">
                                    <thead>
                                      <tr>
                                        <th> Doctor Name </th>
                                        <th> Date </th>
                                        <th> Message </th>
                                        <th> Status </th>
                                        <th> Cancel </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      
                                    @foreach ($appointments as $appointment)
                                    <tr>
                                        <td> {{ $appointment -> doctor }} </td>
                                        <td> {{ $appointment -> date }} </td>
                                        <td> {{ $appointment -> status }} </td>
                                        <td> {{ $appointment -> message }} </td>
                                        <td> <a href="{{url('/approve/'.$appointment->id)}}" class="btn btn-info" >
                                            Approve </a>
                                        <td> <a href="{{url('/decline/'.$appointment->id)}}" class="btn btn-info" >
                                          Decline </a>
                                          
                                        </td>
                                      </tr>
                                    @endforeach
                                      
                                      
                                      
                                    </tbody>
                                  </table>
                                </div>
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
