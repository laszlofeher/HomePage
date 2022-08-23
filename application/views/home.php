<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FEHÉR LÁSZLÓ PÉTER SZEMÉLYES HONLAPJA ÉS PORTFOLIÓJA</title>
        <meta name="description" content="Fehér László Péter fejlesztő személyes honlapja, portfóliója, blogja." >
        <meta name="robots" content="index, follow">
        <meta property="og:title" content="Személyes honlap, fejlesztői blog, tutorial, útmutatók" />
        <meta property="og:description" content="Látogass el a blogra és mindig friss fejlesztési eseteket , információkat olvashatsz." />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://feherlaszlopeter.eu" />
        <meta property="og:image" content="https://feherlaszlopeter.eu/logo.png" />
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
            <!-- ABOUT ME -->
            <section id="about" class="block-section">
                <div class="clearfix my-profile">
                    <div class="my-pict" >
                        <div class="overfly">
                            <div class="text-botttom">
                                <h2 class="text-uppercase color-dark text-bold"><?php print($about['firstname'] . ' ' . $about['lastname']); ?></h2>
                                <h5 class="text-uppercase color-dark font-alt "><?php print($about['profession']); ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="my-desc">
                        <div class="bg-secondary clearfix">
                            <div class="inner-text">
                                <h3 class=" color-dark no-margin-top"><?php
                                    if (isset($about)) {
                                        print($about['title']);
                                    } else {
                                        print("Üdvözöllek!");
                                    }
                                    ?></h3>
                                <p ><?php
                                    if (isset($about)) {
                                        print($about['content']);
                                    } else {
                                        print("Tartalom");
                                    }
                                    ?></p>
                            </div>
                        </div>
                        <div class="bg-dark clearfix">
                            <div class="inner-text">
                                <p class="no-margin color-light ">
                                  <!--<strong class="fix-width-100"><i class="fa fa-calendar margin-right-5"></i> Birthdate</strong> : 09/11/1990<br/>-->
                                    <strong class="fix-width-100"><i class="fa fa-skype margin-right-5"></i> Skype</strong> : <?php
                                    if (isset($about)) {
                                        print($about['skype']);
                                    }
                                    ?><br/>
                                    <strong class="fix-width-100"><i class="fa fa-phone margin-right-5"></i> Phone</strong> : <?php
                                    if (isset($about)) {
                                        print($about['phone']);
                                    }
                                    ?><br/>
                                    <strong class="fix-width-100"><i class="fa fa-envelope margin-right-5"></i> Email</strong> : <?php
                                    if (isset($about)) {
                                        print($about['email']);
                                    }
                                    ?><br/>
                                    <strong class="fix-width-100"><i class="fa fa-globe margin-right-5"></i> Website</strong> : <?php
                                    if (isset($about)) {
                                        print($about['website']);
                                    }
                                    ?><br/>
                                    <strong class="fix-width-100"><i class="fa fa-location-arrow margin-right-5"></i> Adresse</strong> : <?php
                                    if (isset($about)) {
                                        print($about['address']);
                                    }
                                    ?><br/>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SERVICES-->
                <div class="container">
                    <ul class="services list-unstyled clearfix">
                        <li class="col-sm-4 no-padding">
                            <div class="box">
                                <div class="ic"><i class="fa fa-code"></i></div>
                                <h5 class="text-uppercase color-dark">Web Fejlesztő</h5>
                            </div>
                        </li>
                        <li class="col-sm-4 no-padding">
                            <div class="box">
                                <div class="ic"><i class="fa fa-laptop"></i></div>
                                <h5 class="text-uppercase color-dark">Web Konstruktor</h5>
                            </div>
                        </li>
                        <li class="col-sm-4 no-padding">
                            <div class="box ">
                                <div class="ic"><i class="fa fa-bar-chart"></i></div>
                                <h5 class="text-uppercase color-dark">Web Marketing</h5>
                            </div>
                        </li>
                    </ul>
                </div><!-- END SERVICES-->
            </section><!-- END ABOUT ME -->


            <!-- RESUME -->
            <section id="resume" class="block-section">
                <!--EMPLOYEMNT-->
                            <?php
                            if (isset($employement)) {
                                ?>
                    <div class=" shape-bottom">
                        <div class="bg-secondary block-title">
                            <div class="container">
                                <h2 class="text-uppercase color-dark text-bold no-margin">Munkahelyek</h2>
                                <div class="title-icon"> <i class="fa fa-briefcase"></i> </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-medium ">
                        <div class="list-employment">
                            <ul class="list-unstyled  clearfix">
    <?php
    for ($i = 0; $i < count($employement); $i++) {
        ?>
                                    <li>
                                        <div class="ic"><i class="fa fa-briefcase"></i></div>
                                        <div class="number font-alt"><?php
                                    if (($i + 1) < 10) {
                                        print("0" . ($i + 1));
                                    } else {
                                        print($i + 1);
                                    }
                                    ?></div>
                                        <div class="desc">
                                            <h5 class="text-uppercase color-dark text-bold"><?php print($employement[$i]["position"]); ?></h5>
                                            <p class="font-alt color-dark"><?php print($employement[$i]["employer"]); ?></p>
                                            <p><?php print($employement[$i]["memo"]); ?></p>
                                            <p class="font-alt color-dark"><?php print($employement[$i]["dfrom"] . " - " . $employement[$i]["dto"]); ?></p>
                                        </div>
                                    </li>
        <?php
    }
    ?>
                            </ul>
                        </div>
                    </div><!--END EMPLOYEMNT-->
                                <?php
                            }//end of isset employement
                            ?>
                <!--EDUCATION-->
                <div class=" shape-bottom">
                    <div class="bg-secondary block-title">
                        <div class="container">
                            <h2 class="text-uppercase color-dark text-bold no-margin">Tanulmányok</h2>
                            <div class="title-icon"> <i class="fa fa-graduation-cap"></i> </div>
                        </div>
                    </div>
                </div>
                <div class="container-medium">
                    <div class="list-education">
                        <ul class="list-unstyled  clearfix">
<?php
for ($i = 0; $i < count($education); $i++) {
    ?>

                                <li>
                                    <div class="ic"><i class="fa fa-graduation-cap"></i></div>
                                    <div class="number font-alt"><?php
                                if (($i + 1) < 10) {
                                    print("0" . ($i + 1));
                                } else {
                                    print($i + 1);
                                }
                                ?></div>
                                    <div class="desc">
                                        <h5 class="text-uppercase color-dark text-bold"><?php print($education[$i]["position"]); ?></h5>
                                        <p class="font-alt color-dark"><?php print($education[$i]["school"]); ?></p>
                                        <p><?php print($education[$i]["memo"]); ?></p>
                                        <p class="font-alt color-dark"><?php print($education[$i]["dfrom"] . " - " . $education[$i]["dto"]); ?></p>
                                    </div>
                                </li>
    <?php
}
?>
                        </ul>
                    </div>
                </div> <!--END EDUCATION-->

<?php
if (isset($skills)) {
    ?>
                    <!--SKILLS-->
                    <div class=" shape-bottom">
                        <div class="bg-secondary block-title">
                            <div class="container">
                                <h2 class="text-uppercase color-dark text-bold no-margin">Képességek</h2>
                                <div class="title-icon"> <i class="fa fa-magic"></i> </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-medium">
                        <!--SKIL CHART TOP-->
                        <ul class="skill top list-unstyled clearfix">
    <?php
    for ($i = 0; $i < count($skills); $i++) {
        ?>
                                <li class="col-sm-3 col-xs-6 no-padding">
                                    <div class="box br-right br-bottom">
                                        <span class="chart" data-percent="<?php print($skills[$i]["percent"]); ?>">
                                            <span class="percent"></span>
                                        </span>
                                        <div class="text-uppercase  color-dark"><?php print($skills[$i]["name"]); ?></div>
                                    </div>
                                </li>
                                        <?php
                                    }
                                    ?>
                        </ul><!--END SKIL CHART TOP-->

                        <!-- MORE SKILS -->
                        <div class="title-border">
                            <h5 class="text-uppercase color-dark no-margin text-bold ">További képességek</h5>
                        </div>  

                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled list-progress">
                                    <?php
                                    if ($moreskillscount % 2 == 0) {
                                        for ($i = 0; $i < (int) (count($moreskills) / 2); $i++) {
                                            ?>
                                            <li>
                                                <div class="text-uppercase color-dark title "><span><?php print($moreskills[$i]["name"]); ?></span>  <small><?php print($moreskills[$i]["percent"]); ?>%</small></div>
                                                <div class="progress-line">
                                                    <div class="line" data-holdwidth="<?php print($moreskills[$i]["percent"]); ?>%"></div>
                                                </div>
                                            </li>   
                                            <?php
                                        }
                                    } else {
                                        for ($i = 0; $i < (int) (count($moreskills) / 2) + 1; $i++) {
                                            ?>
                                            <li>
                                                <div class="text-uppercase color-dark title "><span><?php print($moreskills[$i]["name"]); ?></span>  <small><?php print($moreskills[$i]["percent"]); ?>%</small></div>
                                                <div class="progress-line">
                                                    <div class="line" data-holdwidth="<?php print($moreskills[$i]["percent"]); ?>%"></div>
                                                </div>
                                            </li>
            <?php
        }
    }
    ?>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled list-progress">
                                    <?php
                                    if ($moreskillscount % 2 == 0) {
                                        for ($i = (count($moreskills) / 2); $i < count($moreskills); $i++) {
                                            ?>
                                            <li>
                                                <div class="text-uppercase color-dark title "><span><?php print($moreskills[$i]["name"]); ?></span>  <small><?php print($moreskills[$i]["percent"]); ?>%</small></div>
                                                <div class="progress-line">
                                                    <div class="line" data-holdwidth="<?php print($moreskills[$i]["percent"]); ?>%"></div>
                                                </div>
                                            </li>
                                            <?php
                                        }
                                    } else {
                                        for ($i = (count($moreskills) / 2) + 1; $i < count($moreskills); $i++) {
                                            ?>
                                            <li>
                                                <div class="text-uppercase color-dark title "><span><?php print($moreskills[$i]["name"]); ?></span>  <small><?php print($moreskills[$i]["percent"]); ?>%</small></div>
                                                <div class="progress-line">
                                                    <div class="line" data-holdwidth="<?php print($moreskills[$i]["percent"]); ?>%"></div>
                                                </div>
                                            </li>
            <?php
        }
    }
    ?>
                                </ul>
                            </div>
                        </div><!-- END MORE SKILS -->
                        <div class="white-space-50"></div>
                    </div>
    <?php
}
?>
                <!-- DOWNLOAD & PRVIEW BTN -->
                <div class="parallax-bg bg1" >
                    <div class="container">
                        <div class="padding30 text-center">
                            <a href="<?php print(base_url("assets/downloads/FLP.pdf")); ?>" class="btn btn-flat-line btn-default light-font "><i class="fa fa-download"></i> Önéletrajz letöltése</a>
                            <span class="space-inline-15 hidden-xs"></span>
                            <!--<a href="#" class="btn btn-flat-line btn-default light-font"><i class="fa fa-print"></i> Print CV</a>-->
                        </div>
                    </div>
                </div><!-- END DOWNLOAD & PRVIEW BTN -->
            </section><!-- END SERVICES-->


            <!--PORTFOLIO-->
            <section id="portfolio" class="block-section">
                <!--PORTFOLIO TITLE-->
                <div class=" shape-bottom">
                    <div class="bg-secondary block-title">
                        <div class="container">
                            <h2 class="text-uppercase color-dark text-bold no-margin">Portfolio</h2>
                            <div class="title-icon"> <i class="fa fa-inbox"></i> </div>
                        </div>
                    </div>
                </div><!--END PORTFOLIO TITLE-->

                <!--List WOrk-->
                <div class="block-page" >


                    <div class="container-medium clearfix">
                        <div class="row list-work">
<?php
if (isset($portfolio)) {
    for ($i = 0; $i < count($portfolio); $i++) {
        ?>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="box-work">
                                            <div class="work-preview">
                                                <img src="<?php print(base_url()); ?>assets/theme/images/portfolio/<?php print($portfolio[$i]["picture"]); ?>" alt="">
                                                <div class="hover">
                                                    <div class="link-btns">
                                                        <a href="<?php print(base_url()); ?>assets/theme/images/portfolio/<?php print($portfolio[$i]["picture"]); ?>" title="pic"
                                                           class="galery-item"><i
                                                                class="fa fa-search-plus"></i></a>
                                                        <a href="<?php print(base_url('portfolio/portfoliodetail/' . $portfolio[$i]["id"])); ?>"><i class="fa fa-link"></i></a>
                                                    </div>
                                                    <a href="<?php print(base_url('portfolio/portfoliodetail/' . $portfolio[$i]["id"]) . '/#portfoliodetail'); ?>" class="project-title"><?php print($portfolio[$i]["title"]); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        <?php
    }
}
?>
                        </div>
                        <!--BTN SHOW MORE-->
                        <div class="box-btn-more"><a href="/portfolio/portfoliolist/portfoliolist" class="btn btn-flat-line btn-link" id="more-work"> Mutass többet</a></div>
                    </div>
                </div><!--END List WOrk-->


            </section><!--END PORTFOLIO-->

            <!--BLOG-->
            <section id="blog" class="block-section">
                <!--BLOG TITLE-->
                <div class=" shape-bottom">
                    <div class="bg-secondary block-title">
                        <div class="container">
                            <h2 class="text-uppercase color-dark text-bold no-margin">Blog</h2>
                            <div class="title-icon"> <i class="fa fa-comments-o"></i> </div>
                        </div>
                    </div>
                </div><!--END BLOG TITLE-->

                <div class="block-page">
                    <div class="container-medium">
                        <!--LIST BLOG-->
                        <ul class="list-unstyled list-blog">
<?php
if (isset($blog)) {
    for ($i = 0; $i < count($blog); $i++) {
        ?>  
                                    <li>
                                        <div class="clearfix box-blog">
                                            <div class="blog-bg" data-holdbg="assets/theme/images/blog/<?php print($blog[$i]["picturepath"] ?? '1.jpg'); ?>">&nbsp;
                                                <div  class="blog-ic"><i class="fa fa-pencil"></i></div>
                                            </div>
                                            <div class="blog-content">
                                                <h5 class="text-uppercase color-dark text-bold"><?php print($blog[$i]["title"]); ?></h5>
                                                <div class="post-meta font-alt">
                                                    <span><i class="fa fa-calendar"></i><?php print($blog[$i]["publicday"]); ?></span>
                                                    <span><i class="fa fa-user"></i> Jack</span>
                                                    <span><i class="fa fa-folder-o"></i> News</span>
                                                </div>
                                                <p><?php print($blog[$i]["blogsmallcontent"]); ?></p>
                                                <a href="<?php print(base_url('blog/detail/') . $blog[$i]["id"]); ?>" class="btn btn-xs btn-flat-solid primary-btn">Read More</a>
                                            </div>
                                        </div>
                                    </li>
        <?php
    }
}
?>
                        </ul> <!--END LIST BLOG-->

                        <!--BTN SHOW MORE-->
                        <div class="box-btn-more"><a href="<?php print(base_url('blog')); ?>" class="btn btn-flat-line btn-link" id="more-blog"> Show More</a></div>
                    </div>
                </div>
            </section> <!--END BLOG-->

            <!--CONTACT-->
            <section id="contact" class="block-section">
                <!--CONTACT TITLE-->
                <div class=" shape-bottom">
                    <div class="bg-secondary block-title">
                        <div class="container">
                            <h2 class="text-uppercase color-dark text-bold no-margin">Contact</h2>
                            <div class="title-icon"> <i class="fa fa-envelope-o"></i> </div>
                        </div>
                    </div>
                </div><!--END CONTACT TITLE-->

                <div class="contact-area">
                    <div class="form-contact-area clearfix">
                        <div class="inner-contact clearfix ">
                            <!--TABS CONTACT-->
                            <ul id="myTab" class="nav nav-tabs flat-nav-tabs" role="tablist">
                                <li class="active"><a href="#tab0" role="tab" data-toggle="tab">Contact Me</a></li>
                                <li><a href="#tab1" role="tab" data-toggle="tab">Hire Me</a></li>
                            </ul>

                            <div id="myTabContent" class="tab-content flat-tab-content">
                                <div class="tab-pane fade in active" id="tab0">

                                    <form method="post" id="contactForm" name="contactForm">
                                        <input type="hidden" name="subject" value="Message Contact Form">
                                        <div class="form-group">
                                            <label>Your Name (*)</label>
                                            <input type="text" class="form-control form-flat" name="fullname" id="fullname" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email (*)</label>
                                            <input type="email" class="form-control form-flat" name="email" id="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Your Message (*)</label>
                                            <textarea class="form-control form-flat" name="message" id="message" rows="8" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <div id="captcha1"></div>
                                        </div>
                                        <div class="form-group ">
                                            <button type="<?php
if (isset($ajax) && $ajax == "ajax") {
    print("button");
} else {
    print("submit");
}
?>" class="btn btn-flat-solid primary-btn" id="sendbutton1" >Send Message</button>
                                        </div>
                                        <div class="form-group">
                                            <div class="preload-submit hidden"><hr/> <i class="fa fa-spinner fa-spin"></i> Please Wait ...</div>
                                            <div class="message-submit error hidden"></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab1">
                                    <form method="post" id="hireForm" name="hireForm">
                                        <input type="hidden" name="subject" value="Message Hire Form">
                                        <input type="hidden" name="file" id="file-att" value="">
                                        <div class="form-group">
                                            <label>Your Name (*)</label>
                                            <input type="text" class="form-control form-flat" name="fullname2" id="fullname" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email (*)</label>
                                            <input type="email" class="form-control form-flat" name="email2" id="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Short Description About of Project (*)</label>
                                            <textarea class="form-control form-flat" name="message" id="message2" rows="8" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Attach Your Document <span class="display-block color-dark">(only .pdf  allowed , max size 200Kb)</span></label>
                                            <div class="clearfix">						
                                                <input type="button" id="upload-btn" class="btn btn-flat-solid btn-file btn-xs btn-default  clearfix" value="Choose file">
                                                <div id="errormsg" class="clearfix error"></div>	              
                                                <div id="pic-progress-wrap" class="progress-wrap"></div>	
                                                <div id="picbox" class="attbox color-dark"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div id="captcha2"></div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-flat-solid primary-btn">Send Request</button>
                                        </div>

                                        <div class="form-group">
                                            <div class="preload-submit hidden"><hr/> <i class="fa fa-spinner fa-spin"></i> Please Wait ...</div>
                                            <div class="message-submit error hidden"></div>
                                        </div>
                                    </form>
                                </div>
                            </div><!--End Tabs-->
                        </div>
                    </div>

                    <!--MAP-->
                    <div class="map-area" id="map-contact"></div>
                    <div class="hidden map-contact-body">
                        <div class="map-content">
                            <h4 class="no-margin-top font-alt">Iam Here</h4>
                            <p><i class="fa fa-map-marker"></i> <strong>Address:</strong>Budapest, Etele út 48a, 1115</p>
                            <p><i class="fa fa-mobile"></i> <strong>Phone:</strong> +36 70 778 94 11 </p>
                            <p><i class="fa fa-envelope"></i> <strong>Email:</strong> feher.laszlo.peter@gmail.com</p>
                        </div>
                    </div>
                    <!--END MAP-->
                </div>
            </section><!--END CONTACT-->

            <!--FOOTER-->
<?php
$this->load->view("footer");
?>
            <!--END FOOTER-->
        </div><!--End wrapper page-->

        <!-- generate captcha -->
        <div id="mycaptcha-wrap" class="hidden mycaptcha1">
            <div id="mycaptcha" class="mycaptcha1"></div>
        </div>
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
<?php
if (isset($ajax) && $ajax == "ajax") {
    ?>
            <!--message send with ajax -->
            <script src="<?php print(base_url()); ?>assets/message/js/message.js"></script>
    <?php
}
?>
        <!-- Modal window -->
        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Modal header</h3>
            </div>
            <div class="modal-body">
                <p>One fine body…</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-0YVGG7LE3N"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                window.dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-0YVGG7LE3N');
        </script>
    </body>
</html>
