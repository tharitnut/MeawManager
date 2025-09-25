<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MeawManager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  @yield('css_before')
</head>

<body>

  <!-- start navbar  -->
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12">
        <nav class="navbar navbar-expand-lg bg-primary">
          <div class="container">
            <a class="navbar-brand text-white" href="/">Meow Manager</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="cat_page">Cat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="menu_page">Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="promotion_page">Promotion</a>
                </li>
              </ul>
              <a href="/login" class="btn btn-success">Login</a>


            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <!-- end navbar  -->

 




  <div class="container mt-2">
    <div class="row">
      @yield('showProduct')
    </div>
  </div>


  <footer class="mt-5 mb-2">
    <p class="text-center">by devbanban.com @2025</p>
    <p class="text-center">
        This page is intended for educational and non-commercial use only. Some
        images or content displayed may be subject to copyright or licensing
        restrictions. All rights remain with their respective owners.
      </p>
  </footer>

  @yield('footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
  </script>

  @yield('js_before')

</body>

</html>