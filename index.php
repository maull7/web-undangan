<?php
require "function.php";

if (isset($_POST["kirim"])) {
  if (tambah($_POST) > 0) {
    echo
    "<script>
    alert('anda berhasil absen') ;
    </script>";
  } else {
    echo
    "<script>
    alert('anda gagal absen') ;
    </script>";
    return false;
  }
}


?>


<!-- <head>
<link rel="stylesheet" type="text/css" href="style.css">
</head> -->







<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fauzi & Septi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=BhuTuka+Expanded+One&family=Roboto+Condensed:ital,wght@0,400;0,700;1,300&family=Sacramento&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="simply coutdown/simplyCountdown.theme.default.css" />
  <script src="simply coutdown/simplyCountdown.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
  <section id="hero" class="hero w-100 h-100 mx-auto p-5 text-center d-flex justify-content-center align-items-center
    text-white">
    <div>
      <h4>Kepada Yth Bapak/Ibu/Saudara/i</h4>
      <h1>Fauzi & Septi</h1>
      <p>akan melaksanakan akan dan repsesi pernikahan dalam:</p>
      <div class="simply-countdown">
      </div>
      <a href="#home" class="btn btn-lg mt-4" onclick="enableScroll()">Lihat undangan</a>
    </div>
  </section>

  <nav class="navbar navbar-expand-md sticky-top mynavbar">
    <div class="container">
      <a class="navbar-brand" href="#">Zise</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Zise</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body ">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="#home">Home</a>
            <a class="nav-link" href="#info">info</a>
            <a class="nav-link" href="#story">story</a>
            <a class="nav-link" href="#gallery">gallery</a>
            <a class="nav-link" href="#rsvp">rsvp</a>
            <a class="nav-link" href="#gift">gift</a>

          </div>
        </div>
      </div>
    </div>
  </nav>

  <section id="home" class="home">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h2>Acara pernikahan</h2>
          <h3>Diselenggarakan pada tanggal 10 Desember 2030 Di Bogor, Jawa barat.</h3>
          <p>oleh karena itu, kami dengan hormat turut mengundang Bapak/ibu/Saudara/i untuk menghadiri acara pernikahan kami</p>
        </div>
      </div>

      <div class="row couple">

        <div class="col-lg-6">
          <div class="row">
            <div class="col-8 text-end">
              <h3>Ahmad Fauzi N</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi eligendi quis nam doloribus inventore accusantium enim ipsam cumque, accusamus laborum, laboriosam officia, dicta eos. Ex similique harum ipsam facere cum!</p>
              <p>Anak ke 2 dari Bpk. Lorem <br>&<br> Ibu Ipsum</p>
            </div>
            <div class="col-4">
              <img src="img/oreki.jpg" alt="fauzi" class="rounded-circle img-responsive">
            </div>
          </div>
        </div>

        <span class="heart"><i class="bi bi-arrow-through-heart-fill"></i></span>

        <div class="col-lg-6">
          <div class="row">
            <div class="col-4">
              <img src="img/chitanda.jfif" alt="fauzi" class="rounded-circle img-responsive">
            </div>
            <div class="col-8 ">
              <h3>Septi Ariyani</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi eligendi quis nam doloribus inventore accusantium enim ipsam cumque, accusamus laborum, laboriosam officia, dicta eos. Ex similique harum ipsam facere cum!</p>
              <p>Anak ke 3 dari Bpk. Asep <br>&<br> Ibu Ipsum</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>



  <section id="info" class="info">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-10 text-center">
          <h2>Informasi Pernikahan</h2>
          <p class="alamat">Alamat : Aula serba guna Masjid Ash-Shidiq <br> jl. akses tol Cimanggis <br> Cikeas, Kab Bogor, Gn Putri</p>
          <a href="https://maps.app.goo.gl/ZAZYpLuK5M8hwfF18" class="btn btn-sm btn-light my-3">Alamat tujuan</a>
          <p class="deskripsi">Dimohon untuk memahami informasi ini, Dan diharapkan anda tidak salah jadwal dan tidak tersasar.</p>
        </div>
      </div>

      <div class="row justify-content-center mt-4">
        <div class="col-md-5 col-10">
          <div class="card text-center mb-5">
            <div class="card-header">
              Akad nikah
            </div>
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <i class="bi bi-alarm-fill d-block"></i>
                  <span>08.00 - 10.00</span>
                </div>
                <div class="col-md-6">
                  <i class="bi bi-calendar3 d-block"></i>
                  <span>Minggu, 10 Desember 2030</span>
                </div>
              </div>
            </div>
            <div class="card-footer">
              disaat acara akad sedang di mulai tolong untuk tetap kondusif menjaga tata krama, sikap, dan sopan santun
            </div>
          </div>
        </div>

        <div class="col-md-5 col-10">
          <div class="card text-center">
            <div class="card-header">
              Resepsi pernikahan
            </div>
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <i class="bi bi-alarm-fill d-block"></i>
                  <span>11.00 - selesai</span>
                </div>
                <div class="col-md-6">
                  <i class="bi bi-calendar3 d-block"></i>
                  <span>Minggu, 10 Desember 2030</span>
                </div>
              </div>
            </div>
            <div class="card-footer">
              disaat acara akad sedang di mulai tolong untuk tetap kondusif menjaga tata krama, sikap, dan sopan santun
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="story" class="story">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-8 col-10 text-center">
          <span>Bagaimana cerita kami bersemi</span>
          <h2>My the story</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor nulla pariatur voluptate, tempora sint velit aspernatur odit quo veniam! Blanditiis quam a voluptatem ipsa assumenda voluptas nemo veritatis? Error, omnis!</p>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <ul class="timeline">
            <li>
              <div class="timeline-img" style="background-image: url(img/smp.jfif);"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Pertama ketemu</h3>
                  <p>Awal kami masuk sekolah</p>
                </div>
                <div class="timeline-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolorum laboriosam est quod? Nisi nulla, ex ab praesentium doloribus eos inventore dolorum voluptatibus. Rem, provident ad! Reprehenderit nostrum obcaecati quod?</p>
                </div>


              </div>
            </li>

            <li class="timeline-inver">
              <div class="timeline-img" style="background-image: url(img/pramuka.png);"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Awal berkenalan</h3>
                  <p>Karna eskul</p>
                </div>
                <div class="timeline-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolorum laboriosam est quod? Nisi nulla, ex ab praesentium doloribus eos inventore dolorum voluptatibus. Rem, provident ad! Reprehenderit nostrum obcaecati quod?</p>
                </div>


              </div>
            </li>

            <li class="timeline">
              <div class="timeline-img" style=""></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Awal kencan</h3>
                  <p>Mixue</p>
                </div>
                <div class="timeline-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolorum laboriosam est quod? Nisi nulla, ex ab praesentium doloribus eos inventore dolorum voluptatibus. Rem, provident ad! Reprehenderit nostrum obcaecati quod?</p>
                </div>


              </div>
            </li>

            <li class="timeline-inver">
              <div class="timeline-img" style="background-image: url(img/tunangan.jpg);"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>mulai serius</h3>
                  <p>2030</p>
                </div>
                <div class="timeline-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolorum laboriosam est quod? Nisi nulla, ex ab praesentium doloribus eos inventore dolorum voluptatibus. Rem, provident ad! Reprehenderit nostrum obcaecati quod?</p>
                </div>


              </div>
            </li>




          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="gallery" id="gallery">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-8 col-10 text-center">
          <span>Memory the story</span>
          <h2>We the gallery</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>

      <div class="row mt-4">
        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 ">
          <div class="col mt-3">
            <a href="img/gallery/thumnail/thum.jpg" data-toggle="lightbox" data-caption="chitanda1" data-gallery="example-gallery">
              <img src="img/gallery/thum - Copy.jpg" alt="chitanda1" class="img-fluid mt-4">
            </a>
          </div>

          <div class="col mt-3">
            <a href="img/gallery/thumnail/thum.jpg" data-toggle="lightbox" data-caption="chitanda2" data-gallery="example-gallery">
              <img src="img/gallery/thum - Copy.jpg" alt="chitanda" class="img-fluid mt-4">
            </a>
          </div>

          <div class="col mt-3">
            <a href="img/gallery/thumnail/thum.jpg">
              <img src="img/gallery/thum - Copy.jpg" alt="chitanda2" class="img-fluid mt-4">
            </a>
          </div>

          <div class="col mt-3">
            <a href="img/gallery/thumnail/thum.jpg" data-toggle="lightbox" data-caption="chitanda3" data-gallery="example-gallery">
              <img src="img/gallery/thum - Copy.jpg" alt="chitanda3" class="img-fluid mt-4">
            </a>
          </div>
        </div>
      </div>


  </section>

  <section class="rsvp" id="rsvp">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-8 col-10 text-center">

          <h2>Konfirmasi kehadiran tamu undangan</h2>
          <p>Silahkan isi form dibawah ini</p>
        </div>
      </div>

      <form class="row row-cols-lg-auto g-3  align-items-center justify-content-center" action="" method="POST">
        <div class="col-12">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="col-12">
          <label for="jumlah" class="form-label">jumlah</label>
          <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" max="5" length="1" value="1">
        </div>

        <div class="col-12">
          <label for="informasi" class="form-label" style="margin-top :46px ;">Informasi</label>
          <select name="informasi" id="informasi" class="form-control">
            <option selected>Pilih salah satu</option>
            <option value="hadir">Hadir</option>
            <option value="tidak hadir">Tidak hadir</option>


          </select>


          <div class="col-12">
            <button class="btn btn-primary kirim" name="kirim" style="margin-top : 10px ; margin-left : 65px ;">kirim</button>
          </div>
      </form>

      <?php


      ?>

    </div>
  </section>










  <section class="gift" id="gift">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-8 col-10 text-center">
          <span>Ucapan tanda kasih</span>
          <h2>Kirim hadiah</h2>
          <p>Untuk mengenang tanda kasih atau tanda kasih sayangnya silahkan dikirim melalui nomer yang ada dibawah ini</p>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-6">
          <ul class="list-group">
            <li class="list-group-item">
              <div class="fw-bold">BCA</div>
              566-889-000 - Fauzi
            </li>
            <li class="list-group-item">
              <div class="fw-bold">MANDIRI</div>
              900-889-100 - Fauzi
            </li>
            <li class="list-group-item">
              <div class="fw-bold">GOOPAY</div>
              0851-5716-6284 - Maul
            </li>
            <li class="list-group-item">
              <div class="fw-bold">SCAN QR</div>
              <img src="saweria.png" alt="Saweria QR" class="img-thumbnail" width="150">
            </li>
          </ul>
        </div>
      </div>


    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col text-center mt-5">
          <small class="d-block mt-5">&copy; 2024 Zise wedding. All rights reserved</small>
          <small class="text-white">Design By <a href="https://instagram.com/hxans_1">Rehan Maulana</a></small>

          <ul class="mt-3">
            <li>
              <a href="https://instagram.com/hxans_1"><i class="bi bi-instagram"></i></a>
              <a href="wa.me//6285157166284"><i class="bi bi-whatsapp"></i></a>
              <a href="rmgaming601@gmail.com"><i class="bi bi-envelope-fill"></i></a>
              <a href="https://tiktok.com/an need v"><i class="bi bi-tiktok"></i></a>
            </li>
          </ul>
        </div>
      </div>


    </div>
  </footer>

  <div id="audio-container">
    <audio id="song" autoplay loop>
      <source src="song/backsound.mp3" type="audio/mp3">
    </audio>

    <div class="audio-icon" style="display: none;">
      <i class="bi bi-disc-fill"></i>

    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
  <script>
    simplyCountdown('.simply-countdown', {
      year: 2030, // required
      month: 12, // required
      day: 10, // required
      hours: 8, // Default is 0 [0-23] integer
      words: { //words displayed into the countdown
        days: {
          singular: 'hari',
          plural: 'hari'
        },
        hours: {
          singular: 'jam',
          plural: 'jam'
        },
        minutes: {
          singular: 'menit',
          plural: 'menit'
        },
        seconds: {
          singular: 'detik',
          plural: 'detik'
        }
      }
    });
  </script>

  <script>
    const stickyTop = document.querySelector('.sticky-top')
    const offcanvas = document.querySelector('.offcanvas')

    offcanvas.addEventListener('show.bs.offcanvas', function() {
      stickyTop.style.overflow = 'visible';
    })

    offcanvas.addEventListener('hidden.bs.offcanvas', function() {
      stickyTop.style.overflow = 'hidden';
    })
  </script>

  <script>
    const rootElement = document.querySelector(":root");
    const audioIcon = document.querySelector('.audio-icon');
    const icon = document.querySelector('.audio-icon i')
    const song = document.querySelector('#song')

    isPlaying = false;


    function disableScroll() {
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

      window.onscroll = function() {
        window.scrollTo(scrollTop, scrollLeft);
      }


      rootElement.style.scrollBehavior = 'auto';
    }

    // disableScroll()

    function enableScroll() {
      window.scrollTo = function() {};
      rootElement.style.scrollBehavior = 'smooth';
      //   localStorage.setItem ('opened','true');
      playAudio()
    }
    //if (!localStorage.getItem('opened')){
    //disableScroll()
    // }
    function playAudio() {

      song.volume = 0.4;
      audioIcon.style.display = 'flex';
      isPlaying = true;
      song.play();
    }

    audioIcon.onclick = function() {
      if (isPlaying === true) {
        song.pause()
        icon.classList.remove('bi-disc-fill')
        icon.classList.add('bi-pause-circle-fill')
      } else {
        song.play()
        icon.classList.add('bi-disc-fill')
        icon.classList.remove('bi-pause-circle-fill')
      }
      isPlaying = !isPlaying;
    }


    disableScroll();
  </script>



</body>

</html>