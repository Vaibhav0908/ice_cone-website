<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="images/profile.png">
  <title>Landing Page</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" crossorigin />
</head>

<body id="boddy">
  <div class="container-fluids m-0 p-0">
    <header class="sticky-top ">
      <div class="row m-0 p-0">
        <div class="col-lg-3 m-0 p-0">
          <h1 class="text-dark my-3"><strong>gsinfotechvis</strong></h1>
        </div>
        <div class="col-lg-7 col-9  m-0 p-0">

          <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-dark">
                <li class="nav-item">
                  <a aria-current="page" href="/main">Home</a>
                  <hr>
                </li>
                <li class="nav-item dropdown">
                  <a href="/about_page" class="dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown">About</a>
                  <hr>
                  <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <li class="nav-item">
                      <a href="/service_page" class="dropdown-item">Services</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a href="/categories">Products</a>
                  <hr>
                </li>
                <li class="nav-item">
                  <a href="/contact_page">Contact Us</a>
                  <hr>
                </li>
                <li class="nav-item">
                  <a href="/powerbi_page">Business Analysis</a>
                  <hr>
                </li>
                <li>
                  <p class="text-center text-dark"><span id="lightmode">Light Mode</span> <span id="darkmode"
                      class="hidemode">Dark Mode</span><br>
                    <i class="fas fa-toggle-off" id="fa_mode" style="font-size:x-large;cursor:pointer;"></i>
                  </p>
                </li>
              </ul>
            </div>
          </nav>

        </div>

        <div class="col-2 m-0 p-2 text-end">
          @if(session()->has('user'))
            <div class="dropdown">
              <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa-solid fa-user-tie"></i>
                {{ session('user') }}
              </button>

              <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                  class="fas fa-shopping-cart"></i>
                <!--<sup id="cart-count">{{ count(session('cart', [])) }}</sup> -->
                <sup id="cart-count" class="text-white cart-badge">0</sup>
              </button>

              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <form action="/" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item btn btn-danger">
                      Logout <i class="fas fa-sign-out-alt"></i>
                    </button>
                  </form>
                </li>
              </ul>
            </div>
          @else
            <form action="/" method="" class="guest">
              @csrf
              <button class="btn btn-outline-primary" type="submit">
                <i class="fa-solid fa-user-tie"></i> Sign In
              </button>
            </form>
          @endif
        </div>
      </div>
    </header>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="margin-top: 200px;">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">Add To Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" id="modal_body">

            <select>
              <option value="0" aria-disabled="false" class="text-muted">--Please Select--</option>
              <option value="1">Cash on Delivery</option>
              <option value="2">Upi Payment</option>
            </select>
            <!-- <form action=""> -->
            <input type="text" id="amount" placeholder="2000rs" pattern="[0-9]{2,9}">
            <button class="btn btn-warning" id="buy_product">Buy Now</button>
            <!-- </form> -->
          </div>
          <div class="modal-footer text-left">
            <a href="/categories" class="btn btn-outline-success">Add Items</a>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <section>
      @yield('content')
    </section>

    <footer>
      <div class="row m-0 p-0" id="contact_us">
        <div class="col-12 m-0 p-0">
          <h2 class="text-dark"><strong>Contact Us</strong></h2>
        </div>
        <div class="col-lg-1 m-0 p-0"></div>
        <div class="col-lg-3 col-4 m-0 p-0">
          <i class="fa-solid fa-house"></i><a href="#"> Home</a><span> Lorem ipsum dolor sit amet.</span><br><br>
          <i class="fa-solid fa-angle-right"></i><a href="#"> About</a><span> Lorem ipsum dolor sit amet.</span><br><br>
          <i class="fa-solid fa-angle-right"></i><a href="#"> Article</a><span> Lorem ipsum dolor sit
            amet.</span><br><br>
          <i class="fa-solid fa-angle-right"></i><a href="#"> Section</a><span> Lorem ipsum dolor sit
            amet.</span><br><br>
          <i class="fa-solid fa-location-dot"></i><a href="#"> Location</a><span> Lorem ipsum dolor sit
            amet.</span><br><br>
          <i class="fa-solid fa-angle-right"></i><a href="#"> Targets</a><span> Lorem ipsum dolor sit
            amet.</span><br><br>
          <i class="fa-solid fa-bullseye"></i><a href="#"> Goals</a><span> Lorem ipsum dolor sit amet.</span><br><br>
          <i class="fa-solid fa-phone"></i><a href="#" target="_blank"> Contacts</a><span> Lorem ipsum dolor sit
            amet.</span><br><br>
        </div>
        <div class="col-lg-3 col-4 m-0 p-0">
          <i class="fa-solid fa-house"></i><a href="#"> Home</a><span> Lorem ipsum dolor sit amet.</span><br><br>
          <i class="fa-solid fa-angle-right"></i><a href="#"> About</a><span> Lorem ipsum dolor sit amet.</span><br><br>
          <i class="fa-solid fa-angle-right"></i><a href="#"> Article</a><span> Lorem ipsum dolor sit
            amet.</span><br><br>
          <i class="fa-solid fa-angle-right"></i><a href="#"> Section</a><span> Lorem ipsum dolor sit
            amet.</span><br><br>
          <i class="fa-solid fa-location-dot"></i><a href="#"> Location</a><span> Lorem ipsum dolor sit
            amet.</span><br><br>
          <i class="fa-solid fa-angle-right"></i><a href="#">Targets</a><span> Lorem ipsum dolor sit
            amet.</span><br><br>
          <i class="fa-solid fa-bullseye"></i><a href="#" target="_blank"> Goals</a><span> Lorem ipsum dolor sit
            amet.</span><br><br>
          <i class="fa-solid fa-phone"></i><a href="#" target="_blank"> Contacts</a><span> Lorem ipsum dolor sit
            amet.</span><br><br>
        </div>
        <div class="col-lg-3 col-4 m-0 p-0">
          <i class="fa-solid fa-house"></i><a href="#"> Home</a><span> Lorem ipsum dolor sit amet.</span><br><br>
          <i class="fa-solid fa-angle-right"></i><a href="#"> About</a><span> Lorem ipsum dolor sit amet.</span><br><br>
          <i class="fa-solid fa-angle-right"></i></i><a href="#"> Article</a><span> Lorem ipsum dolor sit
            amet.</span><br><br>
          <i class="fa-solid fa-angle-right"></i><a href="#"> Section</a><span> Lorem ipsum dolor sit
            amet.</span><br><br>
          <a href="#" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
          <a href="#" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
          <a href="#" target="_blank"><i class="fa-brands fa-square-whatsapp"></i></a>
          <a href="#" target="_blank"><i class="fa-brands fa-facebook-messenger"></i></a>
        </div>
        <div class="col-lg-2 m-0 p-0"></div>
      </div>
      <div class="row m-0 p-0">
        <div class="col-12 m-0 p-0">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.3612823238905!2d73.77456037501524!3d18.602812982506727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b925d56bb7b3%3A0xe966e6d957e8f9eb!2sGSINFOTECHVIS%20PVT%20LTD!5e0!3m2!1sen!2sin!4v1767685497466!5m2!1sen!2sin"
            width="100%" height="300px" loading="lazy"></iframe>
        </div>
      </div>
      <div class="row m-0 p-0 ">
        <div class="col-12 m-0 copyright">
          <p>&copy;Copyright | Lorem ipsum dolor sit amet consectetur 2025-26.</p>
        </div>
      </div>
    </footer>
  </div>
  <script src="{{ asset("js/script.js") }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
</body>

</html>