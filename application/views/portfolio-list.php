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

      <!-- PROJECT LIST CONTENT-->  
      <section id="portfoliolist" class="block-section">
        <!-- TITLE PAGE-->
        <div class=" shape-bottom">
          <div class="bg-secondary block-title">
            <div class="container">
              <h2 class="text-uppercase color-dark text-bold no-margin">My Portfolio</h2>
              <div class="title-icon"> <i class="fa fa-inbox"></i> </div>
            </div>
          </div>
        </div><!--END  TITLE PAGE-->

        <div class="block-page" >
          <div class="container-medium clearfix">
            <div class="row list-work">
                <?php
                if(isset($portfolio)) {
                    for ($i = 0; $i < count($portfolio); $i++) {
                        ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="box-work">
                                <div class="work-preview">
                                    <img src="<?php print(base_url());?>assets/theme/images/portfolio/<?php print($portfolio[$i]["picture"]); ?>" alt="">
                                    <div class="hover">
                                        <div class="link-btns">
                                            <a href="<?php print(base_url());?>assets/theme/images/portfolio/<?php print($portfolio[$i]["picture"]); ?>" title="pic"
                                               class="galery-item"><i
                                                        class="fa fa-search-plus"></i></a>
                                            <a href="<?php print(base_url('portfolio/portfoliodetail/'.$portfolio[$i]["id"])."/#portfoliodetail");?>"><i class="fa fa-link"></i></a>
                                        </div>
                                        <a href="<?php print(base_url('portfolio/portfoliodetail/'.$portfolio[$i]["id"])."/#portfoliodetail");?>" class="project-title"><?php print($portfolio[$i]["title"]); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div><!--End List WOrk-->

            
            <!--Pagination-->
            <?php print($pagerLink); ?>
            <!--
            <div class="text-center">
              <ul class="pagination   flat-pagination ">
                <li><a href="#">Prev</a></li>
                <li><span>1</span></li>-->
                <!--<li class="active"><a href="#">2</a></li> -->
                <!--<li><a href="#">3</a></li>-->
                <!--<li><a href="#">Next</a></li>
              </ul>
            </div>-->
            <!--End Pagination-->
          </div>
        </div>
      </section> <!-- END PROJECT LIST CONTENT-->

      <!--FOOTER-->
        <?php
        $this->load->view("footer");
        ?>
      <!--END FOOTER-->
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
