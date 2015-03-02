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
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <?= Html::csrfMetaTags() ?>
    <link rel="icon" type="image/png" href="img/favicon.png">
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
              <li><a href="#skills">Skills</a></li>
              <li><a href="#works">Portfolio</a></li>
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
            <a href="#feedback" class="btn btn-border lg wow fadeInLeft animated" data-wow-delay="1.0s">Hire Me</a>
            <a href="#skills" class="btn btn-common lg wow fadeInRight animated" data-wow-delay="1.0s">Learn More</a>
            <div class="scroll">
              <a href="#skills"><i class="fa fa-angle-down wow fadeInUp animated" data-wow-delay="1.2s"></i></a>
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
        <div class="masonry-container">
            <div class="masonry-item" style="width: 30%;height: 150px">
                <img src="img/work/logo/world-hostels.png" alt="">

                <div class="overlay">
                    <?= Html::a('<i class="fa fa-search"></i>', ['/site/get-work-details', 'id' => 'world_hostels'], ['class' => 'fancybox fancybox.ajax']) ?>
                </div>
            </div>
            <div class="masonry-item" style="width: 30%;height: 150px">
                <img src="img/work/logo/backstock.png" alt="">

                <div class="overlay">
                    <?= Html::a('<i class="fa fa-search"></i>', ['/site/get-work-details', 'id' => 'backstock'], ['class' => 'fancybox fancybox.ajax']) ?>
                </div>
            </div>
            <div class="masonry-item" style="width: 30%">
                <img src="img/work/logo/activelocation.png" alt="">

                <div class="overlay">
                    <?= Html::a('<i class="fa fa-search"></i>', ['/site/get-work-details', 'id' => 'activelocation'], ['class' => 'fancybox fancybox.ajax']) ?>
                </div>
            </div>
            <div class="masonry-item" style="width: 40%">
                <img src="img/work/logo/xcinex.png" alt="">

                <div class="overlay">
                    <?= Html::a('<i class="fa fa-search"></i>', ['/site/get-work-details', 'id' => 'xcinex'], ['class' => 'fancybox fancybox.ajax']) ?>
                </div>
            </div>
            <div class="masonry-item" style="width: 50%">
                <img src="img/work/logo/threestay.png" alt="">

                <div class="overlay">
                    <?= Html::a('<i class="fa fa-search"></i>', ['/site/get-work-details', 'id' => 'threestay'], ['class' => 'fancybox fancybox.ajax']) ?>
                </div>
            </div>
            <div class="masonry-item" style="width: 30%">
                <img src="img/work/logo/valettab.jpg" alt="">

                <div class="overlay">
                    <?= Html::a('<i class="fa fa-search"></i>', ['/site/get-work-details', 'id' => 'valettab'], ['class' => 'fancybox fancybox.ajax']) ?>
                </div>
            </div>
            <div class="masonry-item" style="width: 30%">
                <img src="img/work/logo/familychangeservices.jpg" alt="">

                <div class="overlay">
                    <?= Html::a('<i class="fa fa-search"></i>', ['/site/get-work-details', 'id' => 'familychangeservices'], ['class' => 'fancybox fancybox.ajax']) ?>
                </div>
            </div>
            <div class="masonry-item" style="width: 30%">
                <img src="img/work/logo/artzlink.jpg" alt="">

                <div class="overlay">
                    <?= Html::a('<i class="fa fa-search"></i>', ['/site/get-work-details', 'id' => 'artzlink'], ['class' => 'fancybox fancybox.ajax']) ?>
                </div>
            </div>

        </div>
    </div>
  </div>
</section>
<!-- Work Section End  -->

<!-- Skills Section Start -->
<section id="skills">
  <div class="container">
    <div class="row">
    <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s">My<br>Passionate<br> <span>Skills</span></h1>
    <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.3s">
      <div class="fact-block">
        <div class="circle one">
          <div class="count-info">
            <h3><span class="counter">80%</span></h3>
            <h4>PHP</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.0s">
      <div class="fact-block">
        <div class="circle two">
          <div class="count-info">
            <h3><span class="counter">85%</span></h3>
            <h4>Yii/Yii2</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.0s">
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


  <!-- Feedback Section Start -->
  <section id="feedback">
    <div class="container">
      <div class="row">
        <h1 class="section-title wow fadeInLeft animated" data-wow-delay="0.6s"><span>Hire</span><br>or Contact <br> Me</h1>
        <div class="col-sm-6 col-md-6 wow fadeInLeft animated" data-wow-delay="1.0s">
          <form action="" id="mail-form" name="contact">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" name="name" class="form-control" placeholder="Your name">
            </div>
            <span class="error-msg"></span>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
              <span class="error-msg"></span>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-fire"></i></span>
              <input type="text" name="subject" class="form-control" placeholder="Subject">
            </div>
              <span class="error-msg"></span>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-comments"></i></span>
              <textarea name="message" class="form-control large" placeholder="Massage"></textarea>
            </div>
              <span class="error-msg"></span>
            <button type="submit" class="btn btn-green"><i class="fa fa-envelope-o"></i>Send</button>
          </form>
            <div class="success-mail-sent hidden">
                Your message successfully sent. Thank you!
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-md-offset-2 wow fadeInRight animated" data-wow-delay="1.2s">
          <div class="address">
            <h2>Contact Info</h2>
            <ul class="contact-info">
              <li><i class="fa fa-mobile"></i> +374 77966961</li>
              <li><i class="fa fa-skype"></i> ars.dev</li>
              <li><i class="fa fa-envelope-o"></i> arsendev1@gmail.com</li>
            </ul>

          <h2>Follow Me</h2>
            <ul class="social-icon">
              <li><a href="https://www.facebook.com/arsenoo7" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.linkedin.com/in/arsensargsyan/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
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

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
