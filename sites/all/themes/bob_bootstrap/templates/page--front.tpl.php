<section id="header">
	<div class="container">
		<div class="row">
			<div class="span4">
				<h1><?php print $site_name; ?></h1>
			</div>
			
			<div class="span8">					
				<div class="navbar">
					<div class="nav-collapse collapse">
						<ul class="nav nav-pills  pull-right">
							<li class="dropdown"><a href="/">Home</a></li>
							<li class="dropdown">
								<a href="page.html" class="dropdown-toggle">News <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#" class="dropdown-toggle">Press & Media</a></li>
									<li><a href="#">Latest News</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="grid.html">Gallery</a></li>
							<li class="dropdown"><a href="grid.html">Music</a></li>
							<li class="dropdown"><a href="simple.html">Buy</a></li>
							<li class="dropdown"><a href="simple.html">About</a></li>
							<li class="dropdown"><a href="simple.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> 
</section>



<div class="container">


	
	<div class="row">
	  
    <?php if ($page['sidebar_first']): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  
	  
	  <section class="<?php print _twitter_bootstrap_content_span($columns); ?>">  
      <?php if ($page['highlighted']): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if ($breadcrumb): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>

      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if ($tabs): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if ($page['help']): ?> 
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php /* print render($page['content']); */ ?>
	  </section>

    <?php if ($page['sidebar_second']): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
  <footer class="footer container">
    <?php print render($page['footer']); ?>
  </footer>
</div>


	

