<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website PMI</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>
  <!-- As a link -->
<nav class="navbar bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">masukin nomor telepon, email dan sosial media</a>
  </div>
</nav>
  <link href="carousel.css" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <div class="container">
        <img src="{{asset('assets/images/pmi_4.png')}}" width="65" height="50" alt="PMI Kota Cirebon">
        <a class="navbar-brand" href="https://www.facebook.com/palangmerah/" width="30px" height="25px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Layanan</a>
            </li>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button type="button" class="btn btn-primary btn-sm">Sign-In</button>
          <button type="button" class="btn btn-secondary btn-sm">Sign-Up</button>
          </div>
        </div>
      </div>
    </nav>
</header>
<div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div>
            <div class="col-lg-7 col-md-12">
                <div>
                    <h1 class="heading-main">
                        Profil PMI DKI Jakarta
                    </h1>
                    <p>Sebagai ibukota negara, Jakarta tidak terlepas dari misi sosial dan kemanusiaan yang harus diembannya. Palang Merah Indonesia merupakan salah satu Perhimpunan sosial kemanusiaan, sejak tahun 1945. Pada saat itu, PMI DKI Jakarta berstatus PMI Cabang.  Dalam menjalankan misi sosial kemanusiaannya, PMI DKI Jakarta telah melakukan bantuan penanggulangan bencana baik didalam kota maupun dikota-kota lainnya di Indonesia.</p>
                    
                </div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <div id="piechart" style="width: 100%;height: 300px;margin-bottom: -100px;margin-top: -20px;"></div>
                <script type="text/javascript">
                  
                </script>
                </div>
            <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div>
        </div>
    </div>
</section>
    <main class="py-4">
      @yield('content')
    </main>
    <hr class="featurette-divider">
</footer>
  <footer class="bg-danger text-white text-center py-4">
    <div class="container">
      &copy; 2023 Palang Merah Kota Cirebon. Jl. DR. Sudarsono No.18, Kesambi, Kec. Kesambi, Kota Cirebon, Jawa Barat 45134.
    </div>
</footer>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
