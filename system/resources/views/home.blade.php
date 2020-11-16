<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jual Beli Laptop Online</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-dark">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ url('admin/beranda') }}">Jual Beli Laptop Online</a></h1>
      <nav class="nav-menu d-none d-lg-block ">
        <ul>
          <li class=><a href="{{ url('/home') }}">Home</a></li>
          <li><a href="{{ url('/produk') }}">Produk</a></li>
          <li><a href="{{ url('/kategori') }}">Kategori</a></li>
          <li><a href="{{ url('/registrasi') }}">Register</a></li>
          <li><a href="{{ url('/login') }}">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Jual Beli Laptop Online</h1>
      <h2>Salah satu tempat jual beli Laptop terpecaya Yang Ada Di KETAPANG</h2>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <a href=""><img src="assets/img/about.jpg" class="img-fluid" alt=""></a>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Asus X452EA-VX026D</h3>
            <p>
              Memiliki slot RAM yang dapat di upgrade sampai 8 GB, dan VGA yang tak kalah baik dari Lenovo S400-9039, saya rasa laptop ini cukup baik jika dimanfaatkan sebagai laptop gaming kelas menengah.
            </p>
            <div class="row">
              <div class="col-md-6">
                <i class="bx bx-money"></i>
                <h4>Harga</h4>
                <p>RP.3.050.000</p>
              </div>
              <div class="col-md-6">
                <i class="bx bx-laptop"></i>
                <h4>Spesifikasi</h4>
                <p>Prosesor AMD A8 6410
Speed 2.0 GHz, 2 MB Cache
VGA AMD Radeon R5 1 GB
HDD 500 GB Sata 5400 RPM
RAM DDR3 2 GB
RAM Up  Up 12 GB
Ukuran Layar  14.1 inch</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Produk Yang Tersedia</h2>
          <p>Kami Juga Menyediakan Beberapa Jenis Laptop Yang Kami Rekomendasikan Yang Mungkin Sesuai Kebutuhan Anda, Apalagi Anda Seorang Siswa Yang Mungkin Suka Bermain Game Ataupun Anda Mahasiswa IT (INFORMATIKA) Yang Senang Ngoding  Atau Mungkin Yang Sedang Anda Cari Sekarang</p>
        </div>

        <div class="row">
          @foreach($list_produk as $produk)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <a href="{{url('/detail')}}">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{$produk->nama}}</h4>
                <span>{{number_format($produk->harga)}}</span>
                </a>
              </div>
            </div>
          </div>
            @endforeach

          
        </div>

      </div>
    </section><!-- End Team Section -->

    <div class="card my-3">
  <div class="container">
    <h4><center>Halaman Produk</h4></center>
  </div>
  <div class="card-body">
    <div class="container">
      <div class="col-12">
        <div class="row">

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
       <div class="card my-3">
  <div class="container">
    <h4>Halaman Produk</h4>
  </div>
  <div class="card-body">
    <div class="container">
      <div class="col-12">
        <div class="row">

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-primary">Asus</h5>
              <p class="card-text text-muted"> Laptop Asus disini kami menyediakan banyak model dengan berbagai macam spesifikasi tentunya juga terjangkau, Selain itu kamu juga menyediakan laptop asus gaming yaitu Asus ROG</p>
              <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
            </div>
          </div>
        </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-primary">Acer </h5>
              <p class="card-text text-muted">Selain Laptop asus kita juga menyediakan berbagai macam jenis laptop Acer harga murah kualitas bagus yang pastinya sangan cocok sekali untuk klian para pelajar maupun mahasiswa</p>
              <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
            </div>
          </div>
        </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-primary">Dell</h5>
              <p class="card-text text-muted">Selain 2 Produk tadi kita juga menyediakan Laptop Dell laptop dell ini juga tidak kalah bagusnya dibandingkan laptop yang lain</p>
              <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
            </div>
          </div>
        </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-primary">HP</h5>
              <p class="card-text text-muted">Laptop jenis HP juga tersedia loh ditoko online kita buruan di cek.</p>
              <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
            </div>
          </div>
        </div>
<!-- sampai sini -->

      </div>
      </div>
    </div>
  </div>
</div>


  <!-- ======= Footer ======= -->
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Jual Beli Laptop Online</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/ -->
          Designed by <a>AhmadRhmndni</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>