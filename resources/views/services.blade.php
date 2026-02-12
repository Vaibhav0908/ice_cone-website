@extends('com_layouts')

@section('content')
  <div class="row m-0 p-0" id="about_us">
    <div class="col-12 m-0 p-0">
      <h2 class="text-dark"><strong>Services We Provided</strong></h2>
    </div>
  </div>
  
    <div class="row m-0 p-0">
      <div class="col-lg-1 m-0 p-0"></div>
      <div class="col-lg-10 m-3 p-0">
        <div class="row m-0 p-0">
          <div class="carousel" data-bs-ride="carousel-slide" id="slider">
            <marquee scrollamount="12" onmouseover="stop()" onmouseout="start()">
            <div class="carousel-inner">
              <div class="carousel-items active">
                <div class="col-12 m-0 p-1">
                  <div class="card border-0">
                    <div class="card-body">
                      <img src="{{ asset('storage/images/s1.png') }}" alt="img1" loading="lazy" height="100px" width="130px">
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-items">
                <div class="col-12 m-0 p-1">
                  <div class="card border-0">
                    <div class="card-body">
                      <img src="{{ asset('storage/images/s2.png') }}" alt="img2" loading="lazy" height="100px" width="130px">
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-items">
                <div class="col-12 m-0 p-1">
                  <div class="card border-0">
                    <div class="card-body">
                      <img src="{{ asset('storage/images/s3.png') }}" alt="img3" loading="lazy" height="100px" width="130px">
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-items">
                <div class="col-12 m-0 p-1">
                  <div class="card border-0">
                    <div class="card-body">
                      <img src="{{ asset('storage/images/s4.png') }}" alt="img4" loading="lazy" height="100px" width="130px">
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-items">
                <div class="col-12 m-0 p-1">
                  <div class="card border-0">
                    <div class="card-body">
                      <img src="{{ asset('storage/images/s5.png') }}" alt="img5" loading="lazy" height="100px" width="130px">
                    </div>
                  </div>
                </div>
              </div>
            </div>

  </marquee>
  <!-- <a href="#slider" data-bs-slide="prev" class="carousel-control-prev">
    <span class="carousel-control-prev-icon bg-danger"></span>
  </a>
  <a href="#slider" data-bs-slide="next" class="carousel-control-next">
    <span class="carousel-control-next-icon bg-danger"></span>
  </a> -->
  </div>
  </div>
  </div>
  <div class="col-lg-1 m-0 p-0"></div>
  </div>
@endsection