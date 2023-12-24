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
                            <h4 class="card-title">Doctors List</h4>
                            <p class="card-description"> <a class="nav-link btn btn-success create-new-button" href="{{ url('/doctors/create') }}">Add Doctor</a>
                            </p>
                            <div class="table-responsive">
                              <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th style="width=5%">ID</th>
                                    <th style="width=10%">Doctors Name</th>
                                    <th style="width=10%">Speciality</th>
                                    <th style="width=10%">Room No</th>
                                    <th style="width=20%">Phone</th>
                                    <th style="width=15%">Gender</th>
                                    <th style="width=10%">Status</th>
                                    <th style="width=20%">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($doctors as $doctor )
                                      <tr>
                                        <td>{{ $doctor->id }}</td>
                                        <td>{{ $doctor->name }}</td>
                                        <td>{{ $doctor->speciality }}</td>
                                        <td>{{ $doctor->room_num }}</td>
                                        <td>{{ $doctor->phone }}</td>
                                        <td>{{ $doctor->gender }}</td>
                                        <td>Active</td>                                        
                                        
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
