<?php
include('mobile_device_detect.php');
$detect = new Mobile_Detect();
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/ladda-master/dist/ladda.min.css" />
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/normalize.css" />
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/foundation.min.css" />
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/responsiveslides.css" />
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/foundation.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/responsiveslides.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/ladda-master/dist/spin.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/ladda-master/dist/ladda.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/messages_pt_br.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/index.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-60593883-1', 'auto');
        ga('send', 'pageview');
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125061309-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-125061309-1');
    </script>


    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '710006472702347');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=710006472702347&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->


    <!-- Facebook Conversion Code for Page Views - Tatuapé -->
    <script>
        (function() {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = 'https://connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', '6052679398921', {'value':'0.00','currency':'BRL'}]);
    </script>
    <noscript>
        <img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6052679398921&amp;cd[value]=0.00&amp;cd[currency]=BRL&amp;noscript=1" />
    </noscript>

    <!-- Facebook Pixel Code -->
<!--
    <script>
    !function(f,b,e,v,n,t,s) {
        if(f.fbq)return;
        n=f.fbq=function(){
            n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)
        };
        if(!f._fbq)f._fbq=n;
        n.push=n;
        n.loaded=!0;
        n.version='2.0';
        n.queue=[];
        t=b.createElement(e);t.async=!0;
        t.src=v;
        s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)
    }
    (window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1272741929538636');
    fbq('track', 'PageView');
    </script>

    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=1272741929538636&ev=PageView&noscript=1"/>
    </noscript>
-->
    <!-- End Facebook Pixel Code -->

</head>

<body>
    <div id="fb-root"></div>
    <?php if( $detect->isMobile() && !$detect->isTablet() ){
    ?>
        <input type="hidden" id="mobile" value="ok" />
    <?php }else if($detect->isTablet()){
        global $mobile;
        $mobile = "sim";
        ?>
        <input type="hidden" id="mobile-tablet" value="ok" />
    <?php } ?>
    <header id="masthead" role="banner">
        <section id="accessibility-hooks" class="hide-for-small-only row accessibility-hooks">
            <span class="accessibility foundicon-wheelchair">
                <a class="skip" id="skip-content" href="#cursos">Ir para o conteúdo</a>
                <a class="skip" id="skip-footer" href="#colophon">Ir para o rodapé</a>
            </span>
        </section>
        <nav class="top-bar" role="navigation" data-topbar >
            <ul class="title-area">
                <li class="name">
                  <h1 class="icon-logo_soyuz_simbolo"><a href="<?php bloginfo('url'); ?>">Liga solidária</a></h1>
                </li>
                <li class="toggle-topbar menu-icon"><a href=""><span>Menu</span></a></li>
            </ul>
            <section class="top-bar-section">
                <?php
                    $url = explode(get_bloginfo('url'),"http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
                ?>
                <section class="sec-menu-1">
                    <ul class="menu-1">
                        <li class="link-lang"><a href="<?php echo get_bloginfo('url').$url[1]; ?>" class="lang">português</a></li>
                        <li class="link-lang"><a href="<?php echo get_bloginfo('url')."/en".$url[1]; ?>" class="lang">english</a></li>
                        <?php
                            wp_reset_query();
                            query_posts('post_type=institucional&showposts=-1&orderby=date&order=asc&cat=2');
                            if(have_posts()) : while(have_posts()) : the_post();
                        ?>
                                <li><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></li>
                        <?php
                            endwhile;
                            endif;
                        ?>
                        <li><a href="https://santaamalia.portaldominus.com.br/login.php"><i class="hide-for-small-only fa fa-globe"></i>PORTAL DO ALUNO</a></li>
                    </ul>
                </section>
                <section class="sec-menu-2">
                    <ul class="menu-2">
                        <?php
                            wp_reset_query();
                            query_posts('post_type=diferenciais&showposts=-1&orderby=date&order=asc&cat=2');
                            if(have_posts()) : while(have_posts()) : the_post();
                        ?>
                                <li><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></li>
                        <?php
                            endwhile;
                            endif;
                            wp_reset_query();
                        ?>
                    </ul>
                </section>
            </section>
        </nav>
        <?php if (  is_home() ) { ?>
            <section class="logo">
                <h1>Colégio Santa Amália</h1><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" />
            </section>
        <?php }else{ ?>
            <section class="logo logo-int">
                <a href="<?php bloginfo('url'); ?>" ><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
            </section>
        <?php } ?>
    </header>

