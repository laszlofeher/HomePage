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
      <!-- BLOG DETAIL -->
      <section id="blog" class="block-section">
        <div class=" shape-bottom">
          <div class="bg-secondary block-title">
            <div class="container">
              <h2 class="text-uppercase color-dark text-bold no-margin"><?php if(isset($blogdetail['title'])){print($blogdetail['title']);}else{print('Blog cím');} ?></h2>
              <div class="title-icon"> <i class="fa fa-inbox"></i> </div>
            </div>
          </div>
        </div>

        <!-- BLOG CONTENT  -->
        <div class="block-page" >
          <div class="container-medium">
            <div class="row">
              <div class="col-md-9">
                <div class="blog-content">
                  <img src="assets/theme/images/blog/2.jpg" alt="" class="img-responsive">
                  <div class="white-space-20"></div>
                  <div class="post-meta font-alt">
                    <span><i class="fa fa-calendar"></i><?php if(isset($blogdetail['publicday'])){print($blogdetail['publicday']);}else{print('dátum');} ?></span>
                    <span><i class="fa fa-user"></i> Jack</span>
                    <span><i class="fa fa-folder-o"></i> News</span>
                  </div>
                  <?php if(isset($blogdetail['blogcontent'])){print($blogdetail['blogcontent']);}else{print('tartalom');} ?>
                </div>
                <div class="white-space-40"></div>
                <h4 class="color-dark text-uppercase text-bold">Megjegyzések</h4>

                <!-- LIST COMMENTS  -->
                <ol class="comments">
                    <!--
                  <li>
                    <div class="post-comment-block">
                      <div class="img-thumbnail"> <img src="assets/theme/images/people/6.jpg" alt="avatar"> </div>
                      <a href="#" class="btn  btn-link btn-xs btn-flat-line pull-right">Reply</a>
                      <h5 class="no-margin-bottom ">Eno <small>says:</small></h5>
                      <span class="meta-data">5 minutes ago</span>
                      <div class="clearfix white-space-10"></div>
                      <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                    </div>
                    <ul>
                      <li>
                        <div class="post-comment-block">
                          <div class="img-thumbnail"> <img src="assets/theme/images/people/5.jpg" alt="avatar"> </div>
                          <a href="#" class="btn  btn-link btn-xs btn-flat-line pull-right">Reply</a>
                          <h5 class="no-margin-bottom ">Katty <small>says:</small></h5>
                          <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                          <div class="clearfix white-space-10"></div>
                          <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                        </div>
                      </li>
                      <li>
                        <div class="post-comment-block">
                          <div class="img-thumbnail"> <img src="assets/theme/images/people/3.jpg" alt="avatar"> </div>
                          <a href="#" class="btn  btn-link btn-xs btn-flat-line pull-right">Reply</a>
                          <h5 class="no-margin-bottom ">Riani <small>says:</small></h5>
                          <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                          <div class="clearfix white-space-10"></div>
                          <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                        </div>
                      </li>
                    </ul>
                  </li>
                  
                  <li>
                    <div class="post-comment-block">
                      <div class="img-thumbnail"> <img src="assets/theme/images/people/2.jpg" alt="avatar"> </div>
                      <a href="#" class="btn  btn-link btn-xs btn-flat-line pull-right">Reply</a>
                      <h5 class="no-margin-bottom ">Reno <small>says:</small></h5>
                      <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                      <div class="clearfix white-space-10"></div>
                      <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                    </div>
                  </li>
                  -->
                    <?php
                        foreach ($comments as $key => $value) {
                    ?>
                            <li>
                                <div class="post-comment-block">
                                  <div class="img-thumbnail"> <img src="assets/theme/images/people/2.jpg" alt="avatar"> </div>
                                  <a href="#" class="btn  btn-link btn-xs btn-flat-line pull-right">Reply</a>
                                  <h5 class="no-margin-bottom "><?php  print($value['cname'].' ('.$value['email'].')'); ?><small>mondta:</small></h5>
                                  <span class="meta-data"><?php  print($value['crd']); ?></span>
                                  <div class="clearfix white-space-10"></div>
                                  <p><?php  print($value['comment']); ?></p>
                                </div>
                            </li>
                    <?php
                        }
                    ?>
                </ol><!-- END LIST COMMENTS  -->
                <script src='https://www.google.com/recaptcha/api.js'></script>

                <div class="white-space-30"></div>
                <h4 class="color-dark text-uppercase text-bold">MEGJEGYZÉS ÍRÁSA</h4>
                <!-- FORM COMMENTS  -->
                <form method="POST">
                  <div class="row">
                    <div class="col-md-4 ">
                      <input type="hidden" value="<?php print($blogentryid); ?>" name="blogentryid" />
                      <div class="form-group">
                        <label>Az ön neve (*)</label>
                        <input type="text" class="form-control form-flat" name="fullname" value="<?php echo set_value('fullname'); ?>" >
                        <?php echo form_error('fullname', '<div class="error">', '</div>'); ?>
                      </div>
                    </div>
                    <div class="col-md-4 ">
                      <div class="form-group">
                        <label>Email címe (*)</label>
                        <input type="email" class="form-control form-flat" name="email" value="<?php echo set_value('email'); ?>">
                        <?php echo form_error('email', '<div class="error">', '</div>'); ?>
                      </div>
                    </div>
                    <div class="col-md-4 ">

                      <div class="form-group">
                        <label>Web oldala</label>
                        <input type="text" class="form-control form-flat" name="website" value="<?php echo set_value('website'); ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Megjegyzése (*)</label>
                    <textarea class="form-control form-flat" name="message" rows="8"><?php echo set_value('message'); ?></textarea>
                    <?php echo form_error('message', '<div class="error">', '</div>'); ?>
                  </div>
                    
                  <div class="form-group">
                    <?php print($recaptcha);  ?>
                      <div class="error"><?php isset($reCaptchaNotValid) ? print($reCaptchaNotValid) : print(''); ?></div>
                    <button type="submit" class="btn btn-flat-solid primary-btn">Submit Comment</button>
                  </div>
                </form><!-- END FORM COMMENTS  -->

                <div class="white-space-30"></div>
              </div>
              <div class="col-md-3">
                <!-- END WIDGET BLOG  -->
                <form class="box-widget">
                  <div class="input-group">
                    <input type="text" placeholder="Keywords" name="search"  class="form-control form-flat ">
                    <span class="input-group-btn">
                      <button class="btn primary-btn btn-flat-solid btn-icon " type="button"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                </form><!-- END WIDGET BLOG  -->

                <!-- END WIDGET BLOG  -->
                <div class="box-widget">
                  <h5 class="color-dark text-bold text-uppercase">Kategóriák</h5>
                  <ul class="list-category list-unstyled">
                    <!--<li><a href="#">Web Design <span class="color-dark">(10)</span></a></li>-->
                    <?php
                    if(isset($categoryandcount) && isset($categoryandcount[0]['id'])){
                        foreach($categoryandcount as $key => $value){
                    ?>
                            <li><a href="<?php print(base_url('blog/bloglistbycategory/'.$value['id'])); ?>"><?php print($value['categoryname']); ?><span class="color-dark">(<?php print($value['count']); ?>)</span></a></li>
                    <?php
                        }
                    }
                    ?>
                  </ul>
                </div>
                <!-- END WIDGET BLOG  -->

                <!-- END WIDGET BLOG  -->
                <div class="box-widget">
                  <h5 class="color-dark text-bold text-uppercase">Népszerű tagek</h5>
                  <ul class="list-tags list-unstyled">
                    <!--<li><a href="#">Web Design</a></li>-->
                    <?php
                        foreach ($blogtags as $key => $value) {
                    ?>
                    <li><a href="<?php print(base_url('blog/bloglistbytag/'.$value['normalizedtagname'].'/0')); ?>"><?php print($value['tagname'].' '.' ('.$value['count'].')'); ?></a></li>
                    <?php
                        }
                    ?>
                  </ul>
                </div>
                <!-- END WIDGET BLOG  -->

                <!-- WIDGET BLOG  -->
                <div class="box-widget">
                  <h5 class="color-dark text-bold text-uppercase">ARCHIVUM</h5>
                  <ul class="list-archive list-unstyled">
                    <!--<li><a href="#">June 2014</a></li>-->
                    <?php
                        foreach ($dateandcount as $key => $value) {
                    ?>
                        <li><a href="<?php print(base_url('blog/bloglistbyyearmonth/y'.$value['year'].'/m'.$value['month'].'/0')); ?>"><?php print($value['year'].' '.getMonthName($value['month']).' ('.$value['count'].')'); ?></a></li>
                    <?php
                        }
                    ?>
                  </ul>
                </div>
                <!-- END WIDGET BLOG  -->
              </div>
            </div>
          </div>
        </div>
        <!--END BLOG CONTENT  -->

        <!-- PARALLAX BTNS  -->
        <div class="parallax-bg white-light bg1">
          <div class="container">
            <div class="padding30 text-center relative">
              <a href="#" class="btn btn-flat-line btn-default light-font btn-xs"><i class="fa fa-angle-left"></i>  PREV POST</a>
              <span class="space-inline-15 hidden-xs"></span>
              <a href="#" class="btn btn-flat-line btn-default light-font btn-xs">NEXT POST <i class="fa fa-angle-right"></i> </a>
            </div>
          </div>
        </div>
        <!-- END PARALLAX BTNS  -->

      </section>
      <!-- BLOG DETAIL -->
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