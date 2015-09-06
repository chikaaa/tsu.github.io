<!DOCTYPE html>
<html lang="ja">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">

    <title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='/http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='/http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/creative.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style4.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style5.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style6.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php wp_head(); ?></head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url' ); ?>/img1/plant1/logo.png" alt="会社「木ハート」のロゴ"></a>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="<?php echo home_url(); ?>">HOME</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo home_url(); ?>/service-2/">内容と料金</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo home_url(); ?>/area/">対応エリア</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo home_url(); ?>/blog/">ブログ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo home_url(); ?>/question/">よくある質問</a>
                    </li>
                 </ul>
            </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
  </nav>

<header>

 <div id="services" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
    <div class="brown">
    </div>
   <h1><?php the_title(); ?></h1>
 </div>
</header>
