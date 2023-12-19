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

  @include('user.body')

  @include('user.doctors')<!-- .doctors-section -->

  @include('user.news')<!-- .news-section -->

   @include('user.appointment')<!-- .appointment-section -->

  <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="../assets/img/mobile_app.png" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
          <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div> <!-- .banner-home -->

  <footer class="page-footer">
    @include('user.footer')
  </footer>

  @include('user.script')

  
</body>
</html>