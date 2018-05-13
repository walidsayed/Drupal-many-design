<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


<body>
	<header>
		<div class="topone"><div class="container">
			<div class="col-md-6"><?php print render($page['header']); ?></div><div class="col-md-4"><?php print render($page['header2']); ?></div><div class="col-md-2"><?php print render($page['header3']); ?></div></div>
		
		</div>
<div class="header">   
			<div class="top-header">
        <header class="side-header light-header header-sticky">

         
      
          <div class="col-sm-2"><a href="<?php print $front_page; ?> "><img src="<?php print $logo; ?>" class="logo"/></a></div>
			<div class="col-sm-4">
           
				<?php print theme('links__system_secondary_menu', array(
							'links' => $secondary_menu,
							'attributes' => array(
							'id' => 'my_nav',
							'class' => array('top_menu', 'clearfixss','inline'),
						),
							'heading' => array(
							'text' => t('Secondary menu'),
							'level' => 'h2',
							'class' => array('element-invisible'),
							''
						),
						));
						?>	

				</div>
					<div class="side-navigation">
							<?php print render($page['navigation']); ?>
						<div class="navbar-default">
							<div class="navbar-collapse collapse my_nav" id="my_nav"><?php print theme('links__system_main_menu', array(
											'links' => $main_menu,
												'attributes' => array(
													'id' => 'main-menu-links',
													'class' => array('nav navbar-nav', 'clearfix'),
																),
													'heading' => array(
													'text' => t('Main menu'),
												'level' => 'h2',
											'class' => array('element-invisible'),
										),
									)); ?>
										<ul class="nav navbar-nav">
								<div class="clearfix"></div>
							
							</div>
						</div>
					
				<nav>
		<ul>
		
		
									
						</a>
</ul>
</nav>
			</div>
			
		
		</div>
	</header>


		

	


	
	  <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
 <div id="messages"><div class="section clearfix"></div>
     <?php print $messages;  ?>

    <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
      
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?>
        <div class="tabs">
       <?php print render($tabs); ?> 
        </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      
      <?php print $feed_icons; ?>
<?php print render($page['content']); ?>	
</div>












		<!-- FOOTER -->
		
		
	    <div class="row f-bg">
				<div class="container"> 
						<div class=" col-sm-3">
							<?php print render($page['footer_firstcolumn']); ?>
						</div>
				<div class=" col-sm-3">
						<?php print render($page['footer_secondcolumn']); ?>
				</div>
				<div class=" col-sm-3 ">
						<?php print render($page['footer_thirdcolumn']); ?> 
				</div>
				
				<div class="col-sm-3">
						<?php print render($page['footer_fourthcolumn']); ?>
				</div>

				</div>
			</div>
       
			
				<div class="row f-b">
						<div class="container">
						<?php print render($page['footer']); ?>
					</div>
				</div>
				

<div class="clearfix"></div>
</html>



