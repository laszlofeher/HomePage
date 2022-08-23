<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


      <title>SZEMÉLYES HONLAP ÉS PORTFOLIÓ</title>
      <!--favicon-->
      <link rel="apple-touch-icon" href="<?php print(base_url()); ?>assets/theme/images/apple-touch-icon.png">
      <link rel="icon" href="<?php print(base_url()); ?>assets/theme/images/favicon.ico">
      <!--pace (page loader) style-->
      <link href="<?php print(base_url()); ?>assets/plugins/pace/pace.css" rel="stylesheet">
      <script src="<?php print(base_url()); ?>assets/plugins/pace/pace.min.js"></script>
      <!-- Bootstrap -->
      <link href="<?php print(base_url()); ?>assets/plugins/bootstrap-3.3.1/css/bootstrap.min.css" rel="stylesheet">
      <!-- Icons -->
      <link href="<?php print(base_url()); ?>assets/plugins/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <!-- typed style -->
      <link href="<?php print(base_url()); ?>assets/plugins/typed/typed.css" rel="stylesheet">
      <!-- popup style-->
      <link href="<?php print(base_url()); ?>assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
      <!-- simple Captcha-->
      <link href="<?php print(base_url()); ?>assets/plugins/simpleCaptcha/jquery.simpleCaptcha.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Themes styles-->
    <link href="<?php print(base_url()); ?>assets/theme/css/style.css" rel="stylesheet">
    <!-- black skin-->
    <!-- <link href="assets/theme/css/skin-black.css" rel="stylesheet"> -->
  </head>
  <body>
    <!--wrapper page-->
    <div class="wrapper">

      <!-- Main Header -->
        <?php
        $this->load->view("header");
        ?>
      <!-- End Main Header -->

      <!-- PROJECT DETAILS-->
      <section id="portfoliodetail" class="block-section">
        <!-- TITLE PAGE -->
        <div class=" shape-bottom">
          <div class="bg-secondary block-title">
            <div class="container">
              <h2 class="text-uppercase color-dark text-bold no-margin"><?php isset($portfoliowithdetail["title"]) ? print($portfoliowithdetail["title"]) : print("");  ?></h2>
              <p><?php isset($portfoliowithdetail["title2"]) ? print($portfoliowithdetail["title2"]) : print("");  ?></p>
              <div class="title-icon"> <i class="fa fa-inbox"></i> </div>
            </div>
          </div>
        </div><!-- END TITLE PAGE -->


        <div class="block-page" >
          <div class="container-medium clearfix">
            <!--Slider-->
            <div id="carousel-example-generic" class="carousel slide flat-carousel" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                  <?php
                  if(isset($portfoliowithdetail["detailspicture"])){
                    for($i=0; $i<count($portfoliowithdetail["detailspicture"]); $i++){
                  ?>
                      <li data-target="#carousel-example-generic" data-slide-to="<?php print($i); ?>" <?php $i==0?print(' class="active"') : print(""); ?> ></li>
                  <?php
                    }
                  }
                  ?>
              </ol>
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                  <?php
                  if(isset($portfoliowithdetail["detailspicture"])){
                      for($i=0; $i<count($portfoliowithdetail["detailspicture"]); $i++){
                  ?>
                      <div class="item<?php $i==0? print(" active") : print(""); ?>">
                          <img src="<?php print(base_url());?>assets/theme/images/portfolio/<?php print($portfoliowithdetail["detailspicture"][$i]["picture"]); ?> " alt="">
                      </div>   
                  <?php
                      }
                  }
                  ?>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="fa fa-angle-double-left ic-left" ></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="fa fa-angle-double-right ic-right" ></span>
                <span class="sr-only">Next</span>
              </a>
            </div><!--End Slider-->
            <div class="white-space-30"></div>

            <div class="row">
              <div class="col-sm-6">
                <h3 class="text-uppercase color-dark text-bold">Description</h3>
                <div class="white-space-10"></div>
                <p style="text-align: justify;">
                  <?php
                  if(isset($portfoliowithdetail)){
                      print($portfoliowithdetail["description"]);
                  }
                  ?>
                </p>
                <div class="white-space-20"></div>
                <p><a href="<?php isset($portfoliowithdetail["url"]) ? print($portfoliowithdetail["url"]) : print("");?>" class="btn btn-flat-solid primary-btn">Latogasson el az oldalra</a></p>
                <div class="white-space-20"></div>
              </div>
              <div class="col-sm-6">
                <div class="white-space-20"></div>
                <div class="box-testimonial left">
                  <img src="<?php print(base_url()); ?>assets/theme/images/people/secundary.png" alt="" class="img-profile">
                  <h5 class="color-dark text-capitalize no-margin-top line-dash-bottom"><?php isset($portfoliowithdetail["curiosity"]) ? print($portfoliowithdetail["curiosity"]) : print("");?></h5>
                  <p><?php isset($portfoliowithdetail["curiositydescription"]) ? print($portfoliowithdetail["curiositydescription"]) : print("");?></p>
                  <p class="font-alt no-margin color-dark"></p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- BG PARALLAX BTNS-->
        <div class="parallax-bg white-light bg1">
          <div class="container">
            <div class="padding30 text-center relative">
              <a href="#" class="btn btn-flat-line btn-default light-font btn-xs"><i class="fa fa-angle-left"></i>  PREV PROJECT</a>
              <span class="space-inline-15 hidden-xs"></span>
              <a href="#" class="btn btn-flat-line btn-default light-font btn-xs">NEXT PROJECT <i class="fa fa-angle-right"></i> </a>
            </div>
          </div>
        </div><!-- END BG PARALLAX BTNS-->
      </section><!-- END PROJECT DETAILS-->

      <!--FOOTER-->
        <?php
        $this->load->view("footer");
        ?><!--END FOOTER-->
    </div><!--End wrapper page-->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php print(base_url()); ?>assets/plugins/jquery.js"></script>
    <script src="<?php print(base_url()); ?>assets/plugins/bootstrap-3.3.1/js/bootstrap.min.js"></script>
    <!-- maps js -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCGBWyWKmVH-NC_HQ8NeqSpMMMFjKcS00A&sensor=false" type="text/javascript"></script>
    <script src="<?php print(base_url()); ?>assets/plugins/jquery.ui.map.js"></script>
    <!-- advanced easing options -->
    <script src="<?php print(base_url()); ?>assets/plugins/jquery.easing-1.3.pack.js"></script>
    <!-- parallax bg js -->
    <script src="<?php print(base_url()); ?>assets/plugins/jquery.parallax-1.1.3.js"></script>
    <!-- lightbox js -->
    <script src="<?php print(base_url()); ?>assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- typed animation-->
    <script src="<?php print(base_url()); ?>assets/plugins/typed/typed.js"></script>
    <!-- easy chart-->
    <script src="<?php print(base_url()); ?>assets/plugins/easypiechart/jquery.easypiechart.min.js"></script>
    <!-- simple Captcha -->
    <script src="<?php print(base_url()); ?>assets/plugins/simpleCaptcha/jquery.simpleCaptcha.js"></script>
    <!-- simple Ajax Uploader -->
    <script src="<?php print(base_url()); ?>assets/plugins/Simple-Ajax-Uploader/SimpleAjaxUploader.min.js"></script>
    <!-- validate jquery-->
    <script src="<?php print(base_url()); ?>assets/plugins/validator/jquery.validate.min.js"></script>
    <!--=====================================================-->
    <!--configuration template-->
    <script src="<?php print(base_url()); ?>assets/theme/js/theme.js"></script>
  </body>
</html>
