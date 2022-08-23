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
  <body  data-spy="scroll" data-target=".menu-area" data-offset="200">
    <!--wrapper page-->
    <div class="wrapper">
      <!-- Main Header -->
        <?php
            $this->load->view("header");
        ?> 
      <!-- End Main Header -->
      <section id="blog" class="block-section">
        <!-- TITLE PAGE -->
        <div class=" shape-bottom">
          <div class="bg-secondary block-title">
            <div class="container">
              <h2 class="text-uppercase color-dark text-bold no-margin">TUTORIAL</h2>
              <div class="title-icon"> <i class="fa fa-inbox"></i> </div>
            </div>
          </div>
        </div>
        <!-- END TITLE PAGE -->
        <div class="block-page" >
          <div class="container-medium">
            <!-- FORM SEARCH-->
            <form class="box-widget">
              <div class="input-group">
                <input type="text" placeholder="Keywords" name="search"  class="form-control form-flat ">
                <span class="input-group-btn">
                  <button class="btn primary-btn btn-flat-solid btn-icon " type="button"><i class="fa fa-search"></i></button>
                </span>
              </div>
            </form>
            <!-- END FORM SEARCH-->
            <!-- LIST BLOG-->
            <ul class="list-unstyled list-blog">
                <?php
                    if(isset($tutorial)){
                        for($i=0; $i<count($tutorial); $i++){
                ?>  
                            <li>
                              <div class="clearfix box-blog">
                                <div class="blog-bg" data-holdbg="<?php print(base_url())?>assets/theme/images/tutorial/<?php print($blog[$i]["picturepath"] ?? '1.jpg'); ?>">&nbsp;
                                  <div  class="blog-ic"><i class="fa fa-pencil"></i></div>
                                </div>
                                <div class="blog-content">
                                  <h5 class="text-uppercase color-dark text-bold"><?php print($tutorial[$i]["title"]); ?></h5>
                                  <div class="post-meta font-alt">
                                    <span><i class="fa fa-calendar"></i><?php print($tutorial[$i]["publicday"]); ?></span>
                                    <span><i class="fa fa-user"></i> Jack</span>
                                    <span><i class="fa fa-folder-o"></i> News</span>
                                  </div>
                                  <p><?php print($tutorial[$i]["shortcontent"]); ?></p>
                                  <a href="<?php print(base_url('tutorial/detail/').$tutorial[$i]["id"]); ?>" class="btn btn-xs btn-flat-solid primary-btn">Read More</a>
                                </div>
                              </div>
                            </li>
                <?php
                        }
                    }
            
                ?>
            </ul>
            <!-- END LIST BLOG--> 
            <!--Pagination-->
            <div class="text-center">
                <?php
                    print($pagelinks);
                ?>
            </div>
            <!--End Pagination-->
          </div>
        </div>
      </section>

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
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script> 
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