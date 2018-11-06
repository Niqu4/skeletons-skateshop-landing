<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php 
      include 'dbConfig.php';
    ?>
    <title>SKELETONS ON SKATEBORDS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet"> 
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!-- Scroll Animated JS -->
    <link rel="stylesheet" href="css/animate.css">

  </head>

  <body id="page-top">
    <!-- Animate WOW.js -->
      <script src="js/wow.min.js"></script>
        <script>
          new WOW().init();
        </script>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top" style="font-family: 'Monoton'">skeletons</a>
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/logo.png" height="70px"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Меню
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger pulse" href="#about">О нас</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger pulse" href="#projects">Товары</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger pulse" href="#signup">Подписаться</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <h1 class="mx-auto my-0 text-uppercase" style="font-family: 'Monoton'" >SKELETONS</h1>
          <h2 class="text-white-50 mx-auto mt-2 mb-5 head-font text-uppercase" style="font-family: 'Monoton'">Skate shop</h2>
          <a href="#signup" class="btn btn-primary js-scroll-trigger tada">Узнать побольше</a>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto wow fadeInRight">
            <h2 class="text-white mb-4" style="font-family: 'Monoton'">skeletons</h2>
            <p class="text-white-50">
              Первый в Алмате магазин скейтов и их принадлежностей! Лучшие деки, траки, колёса, гриптейпы и подшипники!<br>
              Импортные товары из США, Канады и Европы!
            </p>
          </div>
        </div>
        <img src="img/ipad.png" class="img-fluid" alt="ipad">
      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
      <div class="container">

        <!-- Featured Project Row -->
<div class="container">
  
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100" src="img/slide-01.png" alt="First slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Деки</h3>
                <p>Только у нас импортные деки из канадского клёна из 7 и 9 слоёв - которые гарантируют надежность при самых высоких прыжках, с самым экслюзивным и безбашенным дизайном! SantaCruz, SUPREME, Powell-Peralta и другие ждут тебя! Подари улицам стиль!</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="img/slide-02.jpg" alt="Second slide">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Подшипники</h3>
                <p>Вместо традиционных подшипников ты можешь приобрести у нас самые качественные подшипники, от заявивших о себе брендов - Bones, Yellow Jacket, Spitfire Burner по доступным ценам! С нашими подшипниками ты сможешь забыть о проблемах неровных асфальтов в твоем городе!</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="img/slide-03.jpg" alt="Third slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Траки</h3>
                <p>У нас ты можешь приобрести самые флексовые траки, вместо обычных железных - хромированная сталь, с разными температурными градиентами от мировых брендов: Fury, Krux, Destructo, Navigator</p>
            </div>
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
                
</div>
<br><br><br><br>

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6 wow fadeInRight">
            <img class="img-fluid" src="img/demo-image-01.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="wow fadeInLeft bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white">Жандос</h4>
                  <p class="mb-0 text-white-50">
                    Лучший скейтшоп который я встречал в городе. Большинство вещей импортные, 
                    никакого китайского стаффа. Все вещи соответствуют описанию, большой и разнообразный
                    выбор всего. Буду постоянно теперь закупаться здесь.
                  </p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
          <div class= "wow fadeInLeft col-lg-6">
            <img class="img-fluid" src="img/demo-image-02.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="wow fadeInRight bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white">Бауржан</h4>
                  <p class="mb-0 text-white-50">
                    После учебы в США начал увлекаться скейтами, решил сделать младшему
                    брату подарок, не мог найти подходящий магазин с хорошим выбором и 
                    соответствием цена-качество. Удивил ассортимент этого магазина - почти 
                    такой же, как в Америке! 
                  </p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Call-to-action Section -->
    <section id="signup" class="signup-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">

            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">
              Только новым клиентам скидки до <span style="color: #f83600"><b>40%</b></span>! Подпишись на нашу рассылку по акциям и 
              пополнениям ассортимента!
            </h2>


            <?php 
              if(isset($_POST['subscribe'])){
                $sql = "INSERT INTO sub_emails (sub_emails)
                        VALUES ('".$_POST["sub_mail"]."')";
                            error_reporting(E_ALL);
                            ini_set('display_errors', 1);
                $result = mysqli_query($conn,$sql);
              }
            ?>

            <form class="form-inline d-flex" action="index.php" method="post">
              <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0"  placeholder="Введите ваш почтовый адрес..." name = "sub_mail">
              <button type="button" class="btn btn-primary mx-auto" data-toggle="modal" data-target="#exampleModal" name = "subscribe">Подписаться</button>
            </form>

          </div>
        </div>
      </div>
    </section>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Поздравляем!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        А за подписку мы дарим тебе пак стикеров для скейта!
        <br><br>
        Сообщи любому консультанту свой почтовый адрес, на который ты оформлял подписку, и мы дадим тебе выбрать до 3-х стикеров из нашего постоянно пополняющегося пака!
        <br><br>
        Увидимся в скейтшопе!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Спасибо!</button>
      </div>
    </div>
  </div>
</div>

    <!-- Contact Section -->
    <section class="contact-section bg-black">
      <div class="container">

        <div class="row">

          <div class="wow fadeInLeft col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Адрес</h4>
                <hr class="my-4">
                <div class="small text-black-50">пр. Сейфуллина, 483, "Mega Park" 2-этаж</div>
              </div>
            </div>
          </div>

          <div class="wow fadeInLeft col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="#">help@skeletons.com</a>
                </div>
              </div>
            </div>
          </div>

          <div class="wow fadeInLeft col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Телефон</h4>
                <hr class="my-4">
                <div class="small text-black-50">+7 (777) 952-2676</div>
              </div>
            </div>
          </div>
        </div>

        <div class="social d-flex justify-content-center">
          <a href="https://twitter.com/neputeviy_" class="wow fadeInLeft mx-2">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://facebook.com/skeletonskategear" class="wow fadeInLeft mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://github.com/Niqu4" class="wow fadeInLeft mx-2">
            <i class="fab fa-github"></i>
          </a>
        </div>

      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; Nuraly Uzakaliyev 2018
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>