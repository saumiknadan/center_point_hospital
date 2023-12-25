<!DOCTYPE html>
<html lang="en">
<head>
  @include('user.head')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
     @include('user.topbar')<!-- .topbar -->

    @include('user.navbar') <!-- .navbar -->
  </header>

  <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Inverse table</h4>
                    <p class="card-description"> Add class <code>.table-dark</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> Doctor Name </th>
                            <th> Date </th>
                            <th> Message </th>
                            <th> Status </th>
                          </tr>
                        </thead>
                        <tbody>
                          
                        @foreach ($appoints as $appoint)
                        <tr>
                            <td> {{ $appoint -> doctor }} </td>
                            <td> {{ $appoint -> date }} </td>
                            <td> {{ $appoint -> status }} </td>
                            <td> {{ $appoint -> message }} </td>
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


  
  

  

  <footer class="page-footer">
    @include('user.footer')
  </footer>

  @include('user.script')

  
</body>
</html>