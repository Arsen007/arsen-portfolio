<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>Arsen Sargsyan</title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
<!-- Header Section Start -->
  <div id="header">
    <div class="container">
      <div class="col-md-12 top-header">
        <div class="logo-menu">
          <div class="logo pull-left wow fadeInDown animated" data-wow-delay=".2s">
<!--            <a href="index.html"><img src="img/logo.png" alt="logo"></a>-->
              <p class="slogan"><span class="open_bracket">{</span>ARSEN SARGSYAN<br><span class="slogan_sub">Web Developer</span><span class="close_bracket">}</span></p>
          </div>
          <div class="pull-right wow fadeInDown animated" data-wow-delay=".2">
            <div id="menu" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
              <span>menu</span>
            </div>
          </div>
        </div>
        <div class="sidebar-nav">
          <!-- navigation start -->
          <div class="navmenu navmenu-default navmenu-fixed-right offcanvas" style="" id="navigation">
            <a href="index.html"><img class="logo" src="img/logo.png" alt="logo"></a>
            <ul class="nav navmenu-nav">
              <li class="active"><a href="#header">Home</a></li>
              <li><a href="#works">Portfolio</a></li>
              <li><a href="#clients">Clients</a></li>
              <li><a href="#blog">Blog</a></li>
              <li><a href="#feedback">Hire/Contact Me</a></li>
            </ul>
          </div>
          <!-- navigation End -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="banner text-center">
<!--            <h1 class="wow fadeInDown animated" data-wow-delay=".8s">Arsen Sargsyan</h1>-->
            <h2 class="wow fadeInDown animated" data-wow-delay=".6s">I AM <div style="height: 100px;color: #82BC00"><span class="slide_item">ARSEN SARGSYAN</span></div></h2>
            <a href="#" class="btn btn-border lg wow fadeInLeft animated" data-wow-delay="1.0s">Hire Me</a>
            <a href="#" class="btn btn-common lg wow fadeInRight animated" data-wow-delay="1.0s">Learn More</a>
            <div class="scroll">
              <a href="#works"><i class="fa fa-angle-down wow fadeInUp animated" data-wow-delay="1.2s"></i></a>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header Section End -->

  <!-- Work Section Start -->
  <section id="works">
    <div class="container">
      <div class="row">
        <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s">Some of <br>My <br><span>Works</span></h1>
        <div class="col-md-7 col-lg-7 grid-left wow fadeInLeft animated" data-wow-delay="1.2s">
          <div class="large">
            <img src="img/work/world-hostels.png" alt="">
            <div class="overlay">
                <?= Html::a('<i class="fa fa-search"></i>',['/site/get-work-details','id'=>'world_hostels'],['class' => 'fancybox fancybox.ajax']) ?>
            </div>
          </div>
          <div class="grid-box">
            <img src="img/work/backstock.png" alt="">
              <div class="overlay">
              <?= Html::a('<i class="fa fa-search"></i>',['/site/get-work-details','id'=>'backstock'],['class' => 'fancybox fancybox.ajax']) ?>
              </div>
          </div>
          <div class="grid-box">
            <img src="img/work/activelocation.png" alt="">
            <div class="overlay">
                <?= Html::a('<i class="fa fa-search"></i>',['/site/get-work-details','id'=>'activelocation'],['class' => 'fancybox fancybox.ajax']) ?>
            </div>
          </div>
        </div>
        <div class="col-md-5 grid-right wow fadeInRight animated" data-wow-delay="1.6s">
          <div class="grid-box large">
            <img src="img/work/xcinex.png" alt="">
            <div class="overlay">
                <?= Html::a('<i class="fa fa-search"></i>',['/site/get-work-details','id'=>'xcinex'],['class' => 'fancybox fancybox.ajax']) ?>
            </div>
          </div>
          <div class="grid-box large">
            <img src="img/work/threestay.png" alt="">
            <div class="overlay">
                <?= Html::a('<i class="fa fa-search"></i>',['/site/get-work-details','id'=>'threestay'],['class' => 'fancybox fancybox.ajax']) ?>
            </div>
          </div>
        </div>
          <div style="clear:both;"></div>
          <div class="col-md-7 col-lg-7 grid-left wow fadeInLeft animated" data-wow-delay="1.2s">
              <div class="large ">
                  <img src="img/work/valettab.png" alt="">

                  <div class="overlay">
                      <?= Html::a('<i class="fa fa-search"></i>', ['/site/get-work-details', 'id' => 'valettab'], ['class' => 'fancybox fancybox.ajax']) ?>
                  </div>
              </div>
              <div class="grid-box ">
                  <img src="img/work/familychangeservices.png" alt="">

                  <div class="overlay">
                      <?= Html::a('<i class="fa fa-search"></i>', ['/site/get-work-details', 'id' => 'familychangeservices'], ['class' => 'fancybox fancybox.ajax']) ?>
                  </div>
              </div>
              <div class="grid-box ">
                  <img src="img/work/artzlink.png" alt="">

                  <div class="overlay">
                      <?= Html::a('<i class="fa fa-search"></i>', ['/site/get-work-details', 'id' => 'artzlink'], ['class' => 'fancybox fancybox.ajax']) ?>
                  </div>
              </div>


          </div>
      </div>
    </div>
  </section>
  <!-- Work Section End  -->

  <!-- Testimonial Section Start -->
<!--  <section id="testimonial">-->
<!--    <div class="container">-->
<!--      <div class="row">-->
<!--        <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s">What My<br>Client <br><span>Says</span></h1>-->
<!--        <div id="testimonial-carousel" class="carousel slide wow fadeInUp animated" data-ride="carousel" data-wow-delay="1.2s">-->
<!--          <!-- Indicators -->-->
<!--          <ol class="carousel-indicators">-->
<!--            <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>-->
<!--            <li data-target="#testimonial-carousel" data-slide-to="1"></li>-->
<!--            <li data-target="#testimonial-carousel" data-slide-to="2"></li>-->
<!--          </ol>-->
<!--          <div class="carousel-inner">-->
<!--            <div class="item active">-->
<!--              <blockquote>-->
<!--                <div class="commant">-->
<!--                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">-->
<!--                    <div class="claint">-->
<!--                      <img src="img/testimonial/img1.jpg" alt="">-->
<!--                    </div>-->
<!--                    <span class="quote"><i class="fa fa-quote-left"></i></span>-->
<!--                  </div>-->
<!--                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">-->
<!--                    <div class="info">-->
<!--                      <p>TLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>-->
<!--                      <h4>Anamoul Rouf</h4>-->
<!--                      <h5>CEO, CloudBee</h5>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </blockquote>-->
<!--            </div>-->
<!---->
<!--            <div class="item">-->
<!--              <blockquote>-->
<!--                <div class="commant">-->
<!--                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">-->
<!--                    <div class="claint">-->
<!--                      <img src="img/testimonial/img2.jpg" alt="">-->
<!--                    </div>-->
<!--                    <span class="quote"><i class="fa fa-quote-left"></i></span>-->
<!--                  </div>-->
<!--                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">-->
<!--                    <div class="info">-->
<!--                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>-->
<!--                      <h4>Imran Khan</h4>-->
<!--                      <h5>Founder, WPBean</h5>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </blockquote>-->
<!--            </div>-->
<!--            <div class="item">-->
<!--              <blockquote>-->
<!--                <div class="commant">-->
<!--                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">-->
<!--                    <div class="claint">-->
<!--                      <img src="img/testimonial/img3.jpg" alt="">-->
<!--                    </div>-->
<!--                    <span class="quote"><i class="fa fa-quote-left"></i></span>-->
<!--                  </div>-->
<!--                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">-->
<!--                    <div class="info">-->
<!--                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>-->
<!--                      <h4>Tanvir Ahmed</h4>-->
<!--                      <h5>Contributor, GrayGrids</h5>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </blockquote>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </section>-->
  <!-- Testimonial Section End -->

  <!-- Clients Section Start -->
<!--  <section id="clients">-->
<!--    <div class="container">-->
<!--      <div class="row">-->
<!--        <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s">My Valuable <br><span>Clients</span></h1>-->
<!--        <div id="clients-carousel" class="owl-carousel owl-theme">-->
<!--          <div class="item wow fadeInLeft animated" data-wow-delay=".9s">-->
<!--            <a href="#"><img src="img/clients/img1.png" alt=""></a>-->
<!--          </div>-->
<!--          <div class="item wow fadeInLeft animated" data-wow-delay=".9s">-->
<!--            <a href="#"><img src="img/clients/img2.png" alt=""></a>-->
<!--          </div>-->
<!--          <div class="item wow fadeInRight animated" data-wow-delay=".9s">-->
<!--            <a href="#"><img src="img/clients/img3.png" alt=""></a>-->
<!--          </div>-->
<!--          <div class="item wow fadeInRight animated" data-wow-delay=".9s">-->
<!--            <a href="#"><img src="img/clients/img4.png" alt=""></a>-->
<!--          </div>-->
<!--          <div class="item wow fadeIn animated">-->
<!--            <a href="#"><img src="img/clients/img5.png" alt=""></a>-->
<!--          </div>-->
<!--          <div class="item wow fadeIn animated">-->
<!--            <a href="#"><img src="img/clients/img6.png" alt=""></a>-->
<!--          </div>-->
<!--          <div class="item wow fadeIn animated">-->
<!--            <a href="#"><img src="img/clients/img7.png" alt=""></a>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </section>-->
  <!-- Clients Section End -->

  <!-- Skills Section Start -->
  <section id="skills">
    <div class="container">
      <div class="row">
      <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s">My<br>Passionate<br> <span>Skills</span></h1>
      <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.2s">
        <div class="fact-block">
          <div class="circle one">
            <div class="count-info">
              <h3><span class="counter">80%</span></h3>
              <h4>PHP</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.2s">
        <div class="fact-block">
          <div class="circle two">
            <div class="count-info">
              <h3><span class="counter">85%</span></h3>
              <h4>Yii/Yii2</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.2s">
        <div class="fact-block">
          <div class="circle three">
            <div class="count-info">
              <h3><span class="counter">70%</span></h3>
              <h4>MySql</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.2s">
        <div class="fact-block">
          <div class="circle four">
            <div class="count-info">
              <h3><span class="counter">90%</span></h3>
              <h4>JS/jQuery</h4>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>
  <!-- Skills Section End -->

  <!-- Blog Section Start -->
<!--  <section id="blog">-->
<!--    <div class="container">-->
<!--      <div class="row">-->
<!--        <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s">My<br>Homey<br><span>Blog</span></h1>-->
<!--        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">-->
<!--          <div class="blog-large wow fadeInLeft animated"  data-wow-delay="1.2s">-->
<!--            <img src="img/blog/img1.jpg" alt="">-->
<!--            <div class="large">-->
<!--              <a class="title" href="#">This is Photoshop's vers ion  of Lorem Ipsum. Pro in gravida </a>-->
<!--              <p>Nibh vel velit auc tor aliq uet. Aenean sollicitu din, lorem quis biben...</p>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight animated" data-wow-delay="1.6s">-->
<!--          <div class="blog-item">-->
<!--            <img src="img/blog/img2.jpg" alt="">-->
<!--            <div class="content">-->
<!--              <a class="title" href="#">This is Photoshop's vers ion  of Lorem Ipsum. Pro in gravida </a>-->
<!--              <p>Nibh vel velit auc tor aliq uet. Aenean sollicitu din, lorem quis biben...</p>-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="blog-item">-->
<!--            <img src="img/blog/img3.jpg" alt="">-->
<!--            <div class="content">-->
<!--              <a class="title" href="#">This is Photoshop's vers ion  of Lorem Ipsum. Pro in gravida </a>-->
<!--              <p>Nibh vel velit auc tor aliq uet. Aenean sollicitu din, lorem quis biben...</p>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight animated" data-wow-delay="1.8s">-->
<!--          <div class="blog-item">-->
<!--            <img src="img/blog/img3.jpg" alt="">-->
<!--            <div class="content">-->
<!--              <a class="title" href="#">This is Photoshop's vers ion  of Lorem Ipsum. Pro in gravida </a>-->
<!--              <p>Nibh vel velit auc tor aliq uet. Aenean sollicitu din, lorem quis biben...</p>-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="blog-item">-->
<!--            <img src="img/blog/img2.jpg" alt="">-->
<!--            <div class="content">-->
<!--              <a class="title" href="#">This is Photoshop's vers ion  of Lorem Ipsum. Pro in gravida </a>-->
<!--              <p>Nibh vel velit auc tor aliq uet. Aenean sollicitu din, lorem quis biben...</p>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </section>-->
  <!-- Blog Section Start -->

  <!-- Feedback Section Start -->
  <section id="feedback">
    <div class="container">
      <div class="row">
        <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s"><span>Hire</span><br>or Contact <br> Me</h1>
        <div class="col-sm-6 col-md-6 wow fadeInLeft animated" data-wow-delay="1.4s">
          <form action="" name="contact">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" name="name" class="form-control" placeholder="Your name">
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-fire"></i></span>
              <input type="text" name="subject" class="form-control" placeholder="Subject">
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-comments"></i></span>
              <textarea name="message" class="form-control large" placeholder="Massage"></textarea>
            </div>
            <button type="submit" class="btn btn-green"><i class="fa fa-envelope-o"></i>Send</button>
          </form>
        </div>
        <div class="col-sm-4 col-md-4 col-md-offset-2 wow fadeInRight animated" data-wow-delay="1.4s">
          <div class="address">
            <h2>Contact Info</h2>
            <ul class="contact-info">
              <li><i class="fa fa-mobile"></i> +374 77966961</li>
              <li><i class="fa fa-skype"></i> ars.dev</li>
              <li><i class="fa fa-envelope-o"></i> arsendev1@gmail.com</li>
            </ul>

          <h2>Follow Me</h2>
            <ul class="social-icon">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Feedback Section End -->

  <!-- Footer section Start -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
          <div class="copyright wow fadeInUp animated" data-wow-delay=".8s">
            <p>Copyright &copy; <?= date('Y')?> Arsen Sargsyan | All rights reserved.</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
          <div class="scroll-top text-center wow fadeInUp animated" data-wow-delay=".6s">
            <a href="#header"><i class="fa fa-chevron-circle-up fa-2x"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer section End -->
<!---->
<!--  <!-- jQuery Load -->-->
<!--  <script src="assets/js/jquery-min.js"></script>-->
<!--  <!-- Bootstrap JS -->-->
<!--  <script src="assets/js/bootstrap.min.js"></script>-->
<!--  <!-- WOW JS plugin for animation -->-->
<!--  <script src="assets/js/wow.js"></script>-->
<!--  <!-- All JS plugin Triggers -->-->
<!--  <script src="assets/js/main.js"></script>-->
<!--  <!-- Smooth scroll -->-->
<!--  <script src="assets/js/smooth-scroll.js"></script>-->
<!--  <!--  -->-->
<!--  <script src="assets/js/jasny-bootstrap.min.js"></script>-->
<!--  <!-- Counterup -->-->
<!--  <script src="assets/js/jquery.counterup.min.js"></script>-->
<!--  <!-- waypoints -->-->
<!--  <script src="assets/js/waypoints.min.js"></script>-->
<!--  <!-- circle progress -->-->
<!--  <script src="assets/js/circle-progress.js"></script>-->
<!--  <!-- owl carousel -->-->
<!--  <script src="assets/js/owl.carousel.js"></script>-->
<!--  <!-- lightbox -->-->
<!--  <script src="assets/js/lightbox.min.js"></script>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
