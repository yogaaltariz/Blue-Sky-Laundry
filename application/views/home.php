<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- style -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('css/home.css') ?>">

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!--googlefont  -->
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Nunito|Permanent+Marker" rel="stylesheet">


  <title>BlueSky</title>
</head>

<body>
  <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">
      <span id="logo">Blue</span>
      <span id="logi">Sky</span>
    </a>

    <!-- //hamburger icon -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#keunggulan">Keunggulan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#member">Member</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#cek">Cek Invoice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#harga">Harga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#kontak">Kontak</a>
        </li>
      </ul>
    </div>
  </nav>

  <!--iklan-->
  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="https://images.unsplash.com/photo-1535999930924-9b47c55d0f7b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
            class="d-block w-100 " alt="...">

          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="https://images.unsplash.com/photo-1551893098-c364e59e4f4c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
            class="d-block w-100 " alt="...">

          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="https://images.unsplash.com/photo-1521656693074-0ef32e80a5d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
            class="d-block w-100 " alt="...">

          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!--end of iklan-->

  <!-- Keunggulan -->
  <section id="keunggulan">
    <h2 class="text-center">Keunggulan layanan kami</h2>
    <hr>
    <div class="d-flex justify-content-around">
      <div class="row">
        <div class="col-lg-4 col-sm-6 keunggulan">
          <div class="card" style="width: 18rem;">
            <img
              src="https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
              class="card-img-top" alt="Bersih" style="height: 12rem;">
            <div class="card-body">
              <h4>Bersih</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 keunggulan">
          <div class="card" style="width: 18rem;">
            <img
              src="https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
              class="card-img-top" alt="Bersih" style="height: 12rem;">
            <div class="card-body">
              <h4>Rapi</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 keunggulan">
          <div class="card" style="width: 18rem;">
            <img
              src="https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
              class="card-img-top" alt="Bersih" style="height: 12rem;">
            <div class="card-body">
              <h4>Suci</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of keunggulan -->

  <!-- syarat -->
  <section id="member">
    <div class="container">
      <h2 class="text-center">Member BlueSky</h2>
      <hr>
      <div class="row">
        <div class="col-lg-6 col-sm-12">
          <h5>Keuntungan menjadi member</h5>
          <ol>
            <li>Dapat menggunakan fitur antar</li>
            <li>Dapat melihat dokumentasi sejarah pemesanan</li>
            <li>Dapat diskon khusus member</li>
          </ol>
        </div>
        <div class="col-lg-6 col-sm-12">
          <h5>Cara menjadi member</h5>
          <ol>
            <li>Datang langsung ke BlueSky Laundry membawa KTP / Kartu identitas resmi lainnya</li>
            <li>Membayar biaya pembuatan member sebesar Rp. 15.000,00 rupiah</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- end of syarat -->

  <!-- cek invoice -->
  <section id="cek">
    <div class="container">
      <h2 class="text-center">Cek invoice</h2>
      <hr>
      <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
      <form>
        <div class="form-group d-flex justify-content-center">
          <input class="form-control form-control-lg w-50" type="text" placeholder="masukkan invoice anda"
            name="invoice" id="cari">
        </div>
      </form>
    </div>


    <div id="content" class="p-2 text-center text-dark border rounded"></div>
  </section>
  <!-- end of cek invoice -->

  <!-- harga -->
  <section id="harga">
    <div class="container">
      <h2 class="text-center">Harga</h2>
      <hr>
      <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <div class="row">
        <!--kolom1-->
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card text-white mb-3" style="max-width: 18rem; background-color: #3f72af;">
            <div class="card-header">Cuci - Gosok</div>
            <div class="card-body">
              <h5 class="card-title">Rp. 6000,00/Kg</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <!--kolom2-->
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card text-white mb-3" style="max-width: 18rem; background-color: #3f72af;">
            <div class="card-header">Cuci aja</div>
            <div class="card-body">
              <h5 class="card-title">Rp. 4000,00/Kg</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <!--kolom3-->
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card text-white mb-3" style="max-width: 18rem; background-color: #3f72af;">
            <div class="card-header">Gosok aja</div>
            <div class="card-body">
              <h5 class="card-title">Rp. 4000,00/Kg</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <!--kolom4-->
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card text-white mb-3" style="max-width: 18rem; background-color: #3f72af;">
            <div class="card-header">Cuci - Gosok express</div>
            <div class="card-body">
              <h5 class="card-title">Rp. 10000,00/Kg</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <!--kolom5-->
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card text-white mb-3" style="max-width: 18rem; background-color: #3f72af;">
            <div class="card-header">Gosok express</div>
            <div class="card-body">
              <h5 class="card-title">Rp. 7000,00/Kg</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <!--kolom6-->
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card text-white mb-3" style="max-width: 18rem; background-color: #3f72af;">
            <div class="card-header">Cuci express</div>
            <div class="card-body">
              <h5 class="card-title">Rp. 7000,00/Kg</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of harga -->

  <!-- Kontak -->
  <section id="kontak">
    <div class="container">
      <h2 class="text-center">Kontak Kami</h2>
      <div>
        <div class="row">
          <div class="col-8">
            <h4>Informasi toko</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
          </div>
          <div class="col-4">
            <h4>Follow us</h4>
            <p>
              <i class="fab fa-instagram"></i>
              BlueSky Laundry
            </p>
            <p>
              <i class="fab fa-twitter"></i>
              @BlueSkyLaundry
            </p>
            <p>
              <i class="fab fa-facebook"></i>
              BlueSky Laundry
            </p>
            <p>
              <i class="fab fa-whatsapp"></i>
              6282274721848
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of Kontak -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>


  <script>
    
    // const getJson = $('#getJson').click(function () {
    //   const content = $('#contentJson')
    //   content.html("")    
    //     $.ajax({
    //         type : 'GET',
    //         url: 'index.json',
    //         success : function(data){
    //           data.forEach(function (item) {
    //             content.append(`<p>NIM : ${item.id} <br> NAMA : ${item.name} <br> Jurusan : ${item.field}</p>`)
    //           })
    //         }
    //     })
    // })

    const cari = $('#cari')
  
    cari.bind('input',function (e){
      const content = document.querySelector('#content')
      content.innerHTML = ""     
      $.ajax({
        type: 'GET',
        url: '<?= base_url('index.php/home/getCustomer') ?>',
        dataType: 'json'
      }).done(function(data){
        data.forEach(function (item){
          
          if (e.target.value === item.id) {
            
            const link = document.createElement('a')
            link.setAttribute('href',`<?= base_url('index.php/home/customer/') ?>${item.id}`)
            link.setAttribute('class','h3')
            link.innerHTML = `Pesanan ${item.nama}`
            content.appendChild(link)
          } else if (e.target.value === '') {
            content.innerHTML = ""
          } else {
            content.innerHTML = "Data tidak ditemukan"
          }
        })
      })
    })

  </script>
</body>

</html>