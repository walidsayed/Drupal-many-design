   
    

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Moblify</title>
    <meta name="description" content="Enjoy MobileFirst Experiences">
    <meta name="author" content="CST">

    <!-- Favicons -->
    <link rel="shortcut icon" type='image/x-icon' href="assets/img/favicon/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="sites/default/files/assets/img/favicon/fapple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="sites/default/files/assets/img/favicon/fapple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="sites/default/files/assets/img/favicon/fapple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="sites/default/files/assets/img/favicon/fapple-touch-icon-precomposed.png">

    <!-- Open Graph protocol -->
    <meta property="og:title" content="Moblify"/>
    <meta property="og:type" content="Website"/>
    <meta property="og:url" content="http://moblify.com"/>
    <meta property="og:image" content="assets/img/favicon/fapple-touch-icon-114x114-precomposed.png"/>
    <meta property="og:site_name" content="Moblify"/>
    <meta property="og:description" content="Enjoy MobileFirst Experiences"/>
   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    
</head>
  <body>

    <div id="perspective" class="e-moveleft">
        <header class="side-header light-header header-sticky">

            <div class="container">

                <?php if ($logo): ?>
    <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="nonsticklogo" />
          <img src="http://apetrailportfolio.com/Development/moblify2/sites/default/files/assets/img/icon.svg" alt="<?php print t('Home'); ?>" id="sticklogo" />
        </a>
           <?php endif; ?>

                <div class="menu-trigger"><a id="sidemenu-trigger" class="sidemenu-trigger"></a></div>


                <nav id="side-navigation" class="main-nav">
                 <ul class="nav">
                  <?php if (!empty($primary_nav)): ?>
                  <?php print render($primary_nav); ?>
                    <?php endif; ?>
                    <?php if (!empty($secondary_nav)): ?>
                    <?php print render($secondary_nav); ?>
                   <?php endif; ?>
                     <?php if (!empty($page['navigation'])): ?>
                      <?php print render($page['navigation']); ?>
                      <?php endif; ?>
                 </nav>

                  
            </nav>

            </div>

        </header>
        <!-- End of Header Section ---------------------------------------------------------------------------- -->

            <div class="page-custom">
        <div class="page-content">
         <div class="wrapper"><!-- wrapper needed for scroll -->
      <!-- Start Content Sections ---------------------------------------------------------------------------- -->
               
    <div class="row">
       <?php if (!empty($page['sidebar_first'])): ?>
        <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
        <?php endif; ?>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
               <h1 class="page-header"><?php print $title; ?></h1>
                  <?php endif; ?>
                 <?php print render($title_suffix); ?>
                     <?php print $messages; ?>
                      <?php if (!empty($tabs)): ?>
                  <?php print render($tabs); ?>
                      <?php endif; ?>
                        <?php if (!empty($page['help'])): ?>
                              <?php print render($page['help']); ?>
                       <?php endif; ?>
                     <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
                   <?php endif; ?>
               <?php print render($page['content']); ?>
         </div>
    </div>
      
                              
                    

                     <?php if (!empty($page['footer'])): ?>
                       <footer class="footer <?php print $container_class; ?>">
                         <?php print render($page['footer']); ?>
                </footer>
                  <?php endif; ?>
            </div>
    <a class="sidemenu-trigger page-content-close-full"></a>
      
          
    <nav class="outer-nav right vertical">
       <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
    </nav>
  
            
  
	 </div>
 </div>
    <script>
        // for main slider
        var swiper = new Swiper('.testimonial-slider-content', {
            scrollbar: '.swiper-scrollbar',
            scrollbarHide: false,
            slidesPerView: 'auto',
            centeredSlides: false,
            spaceBetween: 50,
            grabCursor: true,
            mousewheelControl:false,
            mousewheelReleaseOnEdges: false
        });

    </script>
  </body>
</html>
