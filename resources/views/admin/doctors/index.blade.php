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
                                    <th style="width=10%">Gender</th>
                                    <th style="width=10%">Status</th>
                                    <th style="width=25%">Actions</th>
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
                                        <td class="center">
                                          @if($doctor->status==1)
                                            <span class="label label-success">Active</span>
                                          @else
                                            <span class="label label-danger">Deactive</span>
                                            @endif
                                        </td>
                                        <td class="center">
                                            <div class="row">
                                              <div class="span2">
                                                <a href="{{url('/view-details'.$doctor->id)}}" class="btn btn-danger">
                                                  <i class="mdi mdi-eye"></i>
                                                </a>
                                              </div>
                                              <div class="span2">
                                                  @if($doctor->status==1)
                                                    <a href="{{url('/doctor-status'.$doctor->id)}}" class="btn btn-success">
                                                      <i class="mdi mdi-thumb-down"></i>  
                                                    </a>
                              
                                                  @else
                                                    <a href="{{url('/doctor-status'.$doctor->id)}}" class="btn btn-danger" >
                                                      <i class="mdi mdi-thumb-up"></i>  
                                                    </a>
                                                    @endif
                                              </div>
          
                                              <div class="span2">
                                                <a href="{{url('/doctors/'.$doctor->id.'/edit/')}}" class="btn btn-info" >
                                                  <i class="mdi mdi-pencil"></i>  
                                                </a>                  
                                              </div>
          
                                              <div class="span2">
                                                <form action="{{url('/doctors/'.$doctor->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                  <button type="submit" class="btn btn-danger">
                                                    <i class="mdi mdi-delete"></i> 
                                                  </button>
                                                </form>	
                                              </div>
                                            </div>
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
