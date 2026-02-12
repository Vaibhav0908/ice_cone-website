@extends('/com_layouts')
@section('content')
  <div class="row m-0 p-0">
    <div class="col-12 m-0 p-0">
      <img rel="preload" src="{{asset('storage/images/banner.png')}}" alt='Banner' width="100%" height="600px" class="banner"
        loading="lazy" />
    </div>
  </div>
  <div class="row m-0 p-0" id="services">
    <div class="col-12 m-0 p-0">
      <h2 class="text-dark"><strong>Services</strong></h2>
      <dl class="mx-2">
        <dt>IT Services:</dt>
        <dd>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          Asperiores facilis error, ab corporis fugiat nemo, modi sint
          nulla qui excepturi possimus aperiam est. Voluptate, nostrum.
          Odit, mollitia? Cupiditate itaque repudiandae distinctio
          asperiores magnam accusantium iusto dolore quis labore, enim
          eius perferendis, aperiam provident quaerat porro pariatur
          placeat odio repellendus assumenda.
        </dd>
        <dt>Digital Marketing:</dt>
        <dd>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          Asperiores facilis error, ab corporis fugiat nemo, modi sint
          nulla qui excepturi possimus aperiam est. Voluptate, nostrum.
          Odit, mollitia? Cupiditate itaque repudiandae distinctio
          asperiores magnam accusantium iusto dolore quis labore, enim
          eius perferendis, aperiam provident quaerat porro pariatur
          placeat odio repellendus assumenda.
        </dd>
        <dt>Web Designs:</dt>
        <dd>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          Asperiores facilis error, ab corporis fugiat nemo, modi sint
          nulla qui excepturi possimus aperiam est. Voluptate, nostrum.
          Odit, mollitia? Cupiditate itaque repudiandae distinctio
          asperiores magnam accusantium iusto dolore quis labore, enim
          eius perferendis, aperiam provident quaerat porro pariatur
          placeat odio repellendus assumenda.
        </dd>
        <dt>Recruitments:</dt>
        <dd>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          Asperiores facilis error, ab corporis fugiat nemo, modi sint
          nulla qui excepturi possimus aperiam est. Voluptate, nostrum.
          Odit, mollitia? Cupiditate itaque repudiandae distinctio
          asperiores magnam accusantium iusto dolore quis labore, enim
          eius perferendis, aperiam provident quaerat porro pariatur
          placeat odio repellendus assumenda.
        </dd>
      </dl>
    </div>
  </div>
  <div class="row m-0 p-0" id="about_us">
    <div class="col-12 m-0 p-0">
      <h2 class="text-dark"><strong>About Us</strong></h2>
    </div>
  </div>
  <div class="row m-0 p-0">
    <div class="col-lg-1 m-0 p-0"></div>
    <div class="col-lg-10 m-0 p-0">
      <div class="row m-0 p-0">
        <div class="col-lg-3 col-sm-6 m-0 p-0 imag">
          <img src="{{ asset('storage/images/ind1.png') }}" alt="im1" loading="lazy" />
        </div>
        <div class="col-lg-3 col-sm-6 m-0 p-0 imag">
          <img src="{{ asset('storage/images/ind2.png') }}" alt="im2" loading="lazy" />
        </div>
        <div class="col-lg-3 col-sm-6 m-0 p-0 imag">
          <img src="{{ asset('storage/images/ind3.png') }}" alt="im3" loading="lazy" />
        </div>
        <div class="col-lg-3 col-sm-6 m-0 p-0 imag">
          <img src="{{ asset('storage/images/ind4.png') }}" alt="im4" loading="lazy" />
        </div>
      </div>
    </div>
    <div class="col-lg-1 m-0 p-0"></div>
  </div>
@endsection