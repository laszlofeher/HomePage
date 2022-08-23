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
        <!-- highlight -->
        <link rel="stylesheet" href="<?php print(base_url()); ?>assets/plugins/highlight/default.min.css">
        <link rel="stylesheet" href="<?php print(base_url()); ?>assets/plugins/jquery-quiz/jquery.quiz-min.css">
        <style>
           
            .sidebar-wrapper {
                
            }
            .sidebar-wrapper ul{
                list-style: none;
                width: 100%;
             }
             
            .sidebar-nav li a {
                background: #ebebeb !important;
                color: #000 !important;
                line-height: 40px;
                font-size: 15px;
                padding-top: 10px;
                display: flex;
                width: 100%;
                align-items: center;
            }
            .sidebar-nav li a span {
                padding-right: 5%;
                
            }
            
            .sidebar-nav ul li a {
                background: #7d7d7d !important;
                color: #fff !important;
                line-height: 40px;
                font-size: 15px;
                padding-top: 10px;
            }
            /*#ebebeb*/
            /*#7d7d7d*/
            
        </style>
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
            <!-- BLOG DETAIL -->
            <section id="blog" class="block-section">
                <div class=" shape-bottom">
                    <div class="bg-secondary block-title">
                        <div class="container">
                            <h2 class="text-uppercase color-dark text-bold no-margin"><?php
                                if (isset($tutorialdetail['title'])) {
                                    print($tutorialdetail['title']);
                                } else {
                                    print('Tutorial cím');
                                }
                                ?></h2>
                            <div class="title-icon"> <i class="fa fa-inbox"></i> </div>
                        </div>
                    </div>
                </div>
                <!-- BLOG CONTENT  -->
                <div class="block-page" >
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="sidebar-wrapper">
                                    <aside class="sidebar">
                                        <ul id="sidemenu" class="sidebar-nav">
                                            <?php
                                                for($i = 0; $i< count($tutorialbookdetail) ; $i++) {
                                                    if($tutorialbookdetail[$i]['menutype'] == 'menu' ){
                                            ?>
                                                <li>
                                                    <a href="#" class="cot" data-id="<?php print($tutorialbookdetail[$i]['id']); ?>">
                                                        <span class="sidebar-icon"><i class="fa fa-book"></i></span>
                                                        <span class="sidebar-title"><?php print(isset($tutorialEntryId) && $tutorialbookdetail[$i]['id'] == $tutorialEntryId ? '<b>' : ''); print($tutorialbookdetail[$i]['title']); print(isset($tutorialEntryId) && $tutorialbookdetail[$i]['id'] == $tutorialEntryId ? '</b>' : '');?></span>
                                                    </a>
                                                    <div style="display: none;" id="content_<?php print($tutorialbookdetail[$i]['id']); ?>"><?php print($tutorialbookdetail[$i]['content']); ?></div>
                                                </li>
                                            <?php
                                                        
                                                    } else if($tutorialbookdetail[$i]['menutype'] == 'submenu' ){
                                            ?>
                                                       <li>
                                                            <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu<?php print($tutorialbookdetail[$i]['id']);  ?>">
                                                                <span class="sidebar-icon"><i class="fa fa-book"></i></span>
                                                                <span class="sidebar-title"><?php print($tutorialbookdetail[$i]['title']);  ?></span>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <ul id="submenu<?php print($tutorialbookdetail[$i]['id']);  ?>" class="panel-collapse collapse panel-switch" role="menu">
                                                                <li><a href="#"  class="cot" data-id="<?php print($tutorialbookdetail[$i]['subid']); ?>"><i class="fa fa-caret-right"></i><?php print($tutorialbookdetail[$i]['subtitle']);  ?></a>
                                                                <div style="display: none;" id="content_<?php print($tutorialbookdetail[$i]['subid']); ?>"><?php print($tutorialbookdetail[$i]['subcontent']); ?></div>
                                                                </li> 
                                            <?php    
                                                                while(isset($tutorialbookdetail[$i+1]['id']) && $tutorialbookdetail[$i+1]['id'] == $tutorialbookdetail[$i]['id']){
                                                                   $i++; 
                                            ?>                        
                                                                    <li><a href="#"  class="cot" data-id="<?php print($tutorialbookdetail[$i]['subid']); ?>"><i class="fa fa-caret-right"></i><?php print($tutorialbookdetail[$i]['subtitle']);  ?></a>
                                                                    <div style="display: none;" id="content_<?php print($tutorialbookdetail[$i]['subid']); ?>"><?php print($tutorialbookdetail[$i]['subcontent']); ?></div>
                                                                    </li>
                                            <?php                   
                                                                       
                                                                }
                                            ?>
                                                            </ul>
                                                       </li>
                                            <?php                        
                                                    }
                                                }
                                            ?>
                                            <!--
                                            <li>
                                                <a href="#">
                                                    <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span>
                                                    <span class="sidebar-title">Home</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                                                    <span class="sidebar-icon"><i class="fa fa-users"></i></span>
                                                    <span class="sidebar-title">Management</span>
                                                    <b class="caret"></b>
                                                </a>
                                                <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                                                    <li><a href="#"><i class="fa fa-caret-right"></i>Users</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i>Roles</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-3">
                                                    <span class="sidebar-icon"><i class="fa fa-newspaper-o"></i></span>
                                                    <span class="sidebar-title">Blog</span>
                                                    <b class="caret"></b>
                                                </a>
                                                <ul id="submenu-3" class="panel-collapse collapse panel-switch" role="menu">
                                                    <li><a href="#"><i class="fa fa-caret-right"></i>Posts</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i>Comments</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="sidebar-icon"><i class="fa fa-database"></i></span>
                                                    <span class="sidebar-title">Data</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="sidebar-icon"><i class="fa fa-terminal"></i></span>
                                                    <span class="sidebar-title">Console</span>
                                                </a>
                                            </li>
                                            -->
                                        </ul>
                                    </aside>            
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="blog-content">
                                    <?php
                                    if (isset($tutorialbookdetail[0]['content'])) {
                                        if(isset($tutorialEntryId)){
                                            $key = array_search($tutorialEntryId, array_column($tutorialbookdetail,'id'));
                                            print($tutorialbookdetail[$key]['content']);
                                        }else{
                                            print($tutorialbookdetail[0]['content']);
                                        }
                                    } else {
                                        print('');
                                    }
                                    ?>
                                </div>
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
            <!--FOOTER-->
            <?php
            $this->load->view("footer");
            ?><!--END FOOTER-->
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
        <!-- highlight-->
        <script src="<?php print(base_url()); ?>assets/plugins/highlight/highlight.min.js"></script>
        <!--=====================================================-->
        <!--configuration template-->
        <script src="<?php print(base_url()); ?>assets/theme/js/theme.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <!-- quiz plugin-->
        <script src="<?php print(base_url()); ?>assets/plugins/jquery-quiz/jquery.quiz-min.js"></script>
        <script>
            $(document).ready(function () {
                if ($('[id^=content_]').length > 0) {
                    $('.cot').on('click', function(evt){
                        var id = $(this).data('id');
                        console.log($('#content_'+id).html());
                        console.log(id);
                       $('.blog-content').html($('#content_'+id).html());
                       evt.preventDefault();
                    });
                }
                
                
                if ($('#quiz').length > 0) {

                    $('#quiz').quiz({
                        //resultsScreen: '#results-screen',
                        //counter: false,
                        //homeButton: '#custom-home',
                        counterFormat: 'Kérdés %current of %total',
                        questions: [
                            {
                                'q': 'Milyen függvényt használna egy for ciklusban, ha a kerekterek darabszámát kell vissza adni?',
                                'options': [
                                    'count()',
                                    'strlen()',
                                    'substr()',
                                    'strcount()'
                                ],
                                'correctIndex': 1,
                                'correctResponse': 'Helyes válasz!',
                                'incorrectResponse': 'Helytelen válasz.'
                            },
                            {
                                'q': 'Hogyan bontana fel egy karakterláncot karaktereket egyenként tartalmazó tömbre? ',
                                'options': [
                                    'explode()',
                                    'str_split()',
                                    'strexplode()',
                                    'split()'
                                ],
                                'correctIndex': 1,
                                'correctResponse': 'Helyes válasz!',
                                'incorrectResponse': 'Helytelen válasz.'
                            },
                            {
                                'q': 'Milyen form metódussal töltene fel egy file-t?',
                                'options': [
                                    'DELETE',
                                    'PUT',
                                    'GET',
                                    'POST'
                                ],
                                'correctIndex': 3,
                                'correctResponse': 'Helyes válasz!',
                                'incorrectResponse': 'Helytelen válasz.'
                            },
                            {
                                'q': 'Az isset() függvény egy null értékü tömb elemre true-t ad vissza',
                                'options': [
                                    'Igaz',
                                    'Hamis'
                                ],
                                'correctIndex': 1,
                                'correctResponse': 'Helyes válasz!',
                                'incorrectResponse': 'Helytelen válasz.'
                            },
                            {
                                'q': 'A Magic konstansokat Harry Potter kérésére tették bele a PHP nyelvbe.',
                                'options': [
                                    'Igaz',
                                    'Hamis'
                                ],
                                'correctIndex': 1,
                                'correctResponse': 'Helyes válasz!',
                                'incorrectResponse': 'Helytelen válasz.'
                            }
                        ]
                    });
                }
                if ($('#quizsql').length > 0) {
                    $('#quizsql').quiz({
                        //resultsScreen: '#results-screen',
                        //counter: false,
                        //homeButton: '#custom-home',
                        counterFormat: 'Kérdés %current of %total',
                        questions: [
                            {
                                'q': 'Az SQL nyelv egy?',
                                'options': [
                                    'Lekérdező nyelv',
                                    'Procedurális nyelv',
                                    'OOP nyelv'
                                ],
                                'correctIndex': 0,
                                'correctResponse': 'Helyes válasz!',
                                'incorrectResponse': 'Helytelen válasz.'
                            },
                            {
                                'q': 'Van függvény az SQL nyelvben? ',
                                'options': [
                                    'igen',
                                    'nem'
                                ],
                                'correctIndex': 0,
                                'correctResponse': 'Helyes válasz!',
                                'incorrectResponse': 'Helytelen válasz.'
                            },
                            {
                                'q': 'Az SQL nyelvet részekre bontják?',
                                'options': [
                                    'RDBMS, DBMS',
                                    'DDL, DML',
                                    'KDD, LDD'
                                ],
                                'correctIndex': 1,
                                'correctResponse': 'Helyes válasz!',
                                'incorrectResponse': 'Helytelen válasz.'
                            },
                            {
                                'q': 'Az idegen kulcs fontos az adatbázis integritás szempontjából.',
                                'options': [
                                    'Igaz',
                                    'Hamis'
                                ],
                                'correctIndex': 0,
                                'correctResponse': 'Helyes válasz!',
                                'incorrectResponse': 'Helytelen válasz.'
                            }
                        ]
                    });
                }
            });
        </script>
    </body>
</html>