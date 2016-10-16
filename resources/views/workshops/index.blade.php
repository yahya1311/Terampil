<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Terampil - An Easiest Way To Become Skilled Person</title>
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="../assets/img/logo-hijau.png" type="image/x-icon">
    <!-- <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
 -->../assets/
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="../assets/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="../assets/css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/custom-style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="../assets/js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu-custom-fix" class="navbar navbar-default navbar-fixed-top on">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand-custom" href="index.php">
              <img alt="Brand" class="img-responsive-custom" src="../assets/img/logo-hijau-full.png" />
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right menu-custom">
            <li><a href="#tf-home" class="page-scroll">Home</a></li>
            <li><a href="#tf-produk" class="page-scroll">Produk</a></li>
            <li><a href="#tf-tentang" class="page-scroll">Tentang</a></li>
            <li><a href="#tf-kontak" class="page-scroll">Kontak</a></li>
            <li><a href="#tf-login" class="page-scroll">Sign in</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


<!-- Produk Section
    ==========================================-->
    <div id="tf-produk" class="text-center">
        <div class="container color-inverse">
            <h1 class="h1-title">Cari <strong>Workshop</strong> yang Kamu Mau!</h1>
            <br />
            <div class="col-md-8 col-md-offset-2">
                <form>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="pilihKota" placeholder="Pilih Kota">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="pilihKategori" placeholder="Pilih Kategori">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <input type="date" class="form-control" id="pilihTanggal" placeholder="Mulai Tanggal">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <input type="number" class="form-control" id="pilihDurasi" placeholder="Durasi (Jam)">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn tf-btn-inverse btn-default">Cari</button>
                    </div>
                </form>
            </div>            
        </div>
    </div>

    <!-- Workshop Result Section
    ==========================================-->
    <div id="tf-result">
        <div class="container"> <!-- Container -->
            <div class="section-title text-center center">
                <h2><strong>Workshop</strong> yang Tersedia</h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>
            </div>
            <div class="space"></div>

        <!-- content -->
          <div class="row">
            <div class="col-md-3">
              <div class="list-group">
              <?php $selected_group = Request::get('kategori_id') ?>
              
              <a href="{{ route('workshops.index') }}" class="list-group-item {{ empty($selected_group) ? 'active' : '' }}">Semua Kategori <span class="badge">{{ App\Workshop::count() }}</span></a>

              @foreach (App\Kategori::all() as $group)
                  <a href="{{ route('workshops.index', ['kategori_id' => $group->id_kategori]) }}" class="list-group-item {{ $selected_group == $group->id_kategori ? 'active' : '' }}">{{ $group->nama_kategori }} <span class="badge">{{ $group->workshops->count() }}</span></a>
              @endforeach
            </div>
         </div><!-- /.col-md-3 -->
 
            <div class="col-md-9">
              <div class="panel panel-default">
                <table class="table">
                @foreach ($workshops as $workshop)
                  <tr>
                    <td class="middle">
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                           <?php $photo = ! is_null($workshop->foto) ? $workshop->foto : 'default.png' ?>
                           {!! Html::image('uploads/' . $photo, $workshop->foto, ['class' => 'media-object', 'width' => 300, 'height' => 300]) !!}
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading">{{$workshop->nama_workshop}}</h4>
                          <address>
                            <strong>Alamat: </strong>{{$workshop->alamat}}<br>
                            <strong>Waktu: </strong>{{$workshop->waktu_mulai}}<br>
                            <strong>Pembicara: </strong>{{$workshop->pembicara}}<br>
                            <strong>Harga: Rp </strong>{{$workshop->harga}}<br>
                            <strong>Fasilitas: </strong>{{$workshop->fasilitas}}<br>
                            <strong>Maks Peserta: </strong>{{$workshop->jmlh_peserta}}<br>
                            <strong>CP: </strong>{{$workshop->contact}}<br>
                          </address>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </table>            
              </div>

              <div class="text-center">
                <nav>
                  
                  {{$workshops->appends(Request::query())}}
                </nav>
              </div>
            </div>
          </div>
        </div>
    </div>

    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>COPYRIGHT©2016. Terampil.</p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="../assets/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.isotope.js"></script>

    <script src="../assets/js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="../assets/js/main.js"></script>

  </body>
</html>