<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <nav class="navbar fixed-top bg-light">
    <div class="container d-flex justify-content-start">
      <a type="button" href="#" class="hamburger-button" class="btn-crumb" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </a>

      <span class="text-menu">MENU</span>
      <!-- <button class="btn-crumb" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
        <i class="fa-solid fa-bars"></i>
      </button> -->
    </div>
  </nav>

  <!-- offcanvas -->
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Offcanvas with body scrolling</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Try scrolling the rest of the page to see this option in action.</p>
  </div>
</div>

  <!-- logo -->
  <div class="container">
    <div class="grid-row no-gutter flex-between">
      <div class="header_logo">
        <a href="https://news.detik.com"><img src="https://akcdn.detik.net.id/community/media/visual/2020/09/17/logo-detiknews.png?d=1" class="img-fluid" title="DetikNews" alt="detikNews"></a>
      </div>
    </div>

    <ul class="nav navbar-first">
      <li class="bg-light">
        <a class="navbar-brand" href="#">
          <img src="https://akcdn.detik.net.id/community/media/visual/2020/09/17/logo-detiknews.png?d=1" alt="Bootstrap" width="100%" height="20px">
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">Berita</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">Jabotabek</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">International</a>
      </li>
    </ul>

    <ul class="nav navbar-second">
      <li class="bg-light">
        <a class="navbar-brand" href="#">
          <img src="https://akcdn.detik.net.id/community/media/visual/2020/09/17/logo-detiknews.png?d=1" alt="Bootstrap" width="100%" height="20px">
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">Berita</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">Jabotabek</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">International</a>
      </li>
    </ul>


    <!-- top rekomendasi -->
    <div class="row pt-3">
      <div class="col-sm-3">
        <div class="card artikel-sub">
          <img src="https://source.unsplash.com/random/featured/?news" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, quo.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card artikel-sub">
          <img src="https://source.unsplash.com/random/featured/?news" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, quo.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card artikel-sub">
          <img src="https://source.unsplash.com/random/featured/?news" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, quo.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card artikel-sub">
          <img src="https://source.unsplash.com/random/featured/?news" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, quo.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="pt-4">
      <div class="row">

        <!-- menu -->
        <div class="col-sm-9">
          <div class="col-sm-12">
            <div class="card artikel">
              <img src="https://source.unsplash.com/random/featured/?rapper" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit ?</h5>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi ducimus, architecto laboriosam possimus corrupti eos aliquid nemo quas voluptate iste!</p>
                <a href="#" class="btn btn-primary btn-artikel">Read more <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>


          <div class="pt-3">
            <h4 class="tag">Rekomendasi untuk Anda</h4>
          </div>

          <div class="row">
            <div class="col-sm-4 pt-2">
              <div class="card artikel-sub">
                <img src="https://source.unsplash.com/random/featured/?news" class="card-img-top">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, quo.</p>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pt-2">
              <div class="card artikel-sub">
                <img src="https://source.unsplash.com/random/featured/?news" class="card-img-top">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, quo.</p>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pt-2">
              <div class="card artikel-sub">
                <img src="https://source.unsplash.com/random/featured/?news" class="card-img-top">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, quo.</p>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pt-2">
              <div class="card artikel-sub">
                <img src="https://source.unsplash.com/random/featured/?news" class="card-img-top">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, quo.</p>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pt-2">
              <div class="card artikel-sub">
                <img src="https://source.unsplash.com/random/featured/?news" class="card-img-top">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, quo.</p>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pt-2">
              <div class="card artikel-sub">
                <img src="https://source.unsplash.com/random/featured/?news" class="card-img-top">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, quo.</p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- sidemenu -->
        <div class="col-sm-3 sidemenu">
          <div class="col-sm-12 ">
            <h4 class="tag">Tag Populer</h4>
            <ul>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit.</li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit.</li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit.</li>
            </ul>
          </div>

          <div class="col-sm-12">
            <h4 class="tag">Komentar Terbanyak</h4>
            <ul>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit.</li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit.</li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit.</li>
            </ul>
          </div>

          <div class="col-sm-12 sticky-top">
            <h4 class="tag">Suara Pembaca</h4>
            <div class="suara-pembaca">
              <p>Kirimkan tanggapan dan komentar Anda yang berkaitan dengan pelayanan publik dan keluhan konsumen.</p>
              <button class="btn btn-primary btn-sm btn-suara">Kirim Suara Anda <i class="fa-solid fa-arrow-right"></i></button>
            </div>
          </div>
        </div>
      </div>

    </div>



    <footer>
      <div class="row">
        <div class="col-sm-4 footerInfo text-center">
          <img src="https://akcdn.detik.net.id/community/media/visual/2020/09/17/logo-detiknews.png?d=1" title="DetikNews" alt="detikNews">

          <div class="sosmed">
            <p>Connect With Us</p>
            <i class="fa-brands fa-facebook fb"></i>
            <i class="fa-brands fa-facebook fb"></i>
            <i class="fa-brands fa-facebook fb"></i>
            <i class="fa-brands fa-facebook fb"></i>
            <i class="fa-brands fa-facebook fb"></i>
          </div>
        </div>

        <div class="col-sm-2 footerMenu">
          <h4>Kategori</h4>
          <ul>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
          </ul>
        </div>

        <div class="col-sm-2 footerMenu">
          <h4>Layanan</h4>
          <ul>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
          </ul>
        </div>

        <div class="col-sm-2 footerMenu">
          <h4>Informasi</h4>
          <ul>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
          </ul>
        </div>

        <div class="col-sm-2 footerMenu">
          <h4>Jaringan Media</h4>
          <ul>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
          </ul>
        </div>

      </div>
    </footer>


  </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $(function() {
    $('.hamburger-button').on('click', function(event) {
      event.preventDefault();
      $(this).toggleClass('active');
    });
  });

  $('.btn-close').on('click', function() {
    $('.hamburger-button').removeClass('active');
  });

  
</script>

</html>
