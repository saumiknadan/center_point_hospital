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
                            <!-- Employee Info-->
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{$doctor->name}}</h4>
                                <img src="{{ asset('/storage/'.$doctor->image) }}" alt="image" class="rounded-circle" style="width: 150px; height: 150px;">


                                <p class="card-text">

                                
                                <strong>Phone:</strong> {{ $doctor->phone }} <br>
                                <strong>Speciality:</strong> {{ $doctor->speciality }} <br>
                                <strong>Room:</strong>BDT: {{ $doctor->room_num }} <br>
                                <strong>Availability:</strong> 
                                    @if($doctor->status==1)
                                    <span class="label label-success">Available</span>
                                    @else
                                    <span class="label label-danger">Currently Unavailable</span>
                                    @endif <br>
                                
                                </p>
                            
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
