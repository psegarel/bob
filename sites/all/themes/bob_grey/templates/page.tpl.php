<section id="header-section">
	<div class="container">
		<div class="row">
			<div class="span6">
				<a href="/" id="divSiteTitle"><?php print $site_name; ?></a><br />
				<a href="/" id="divTagLine">Robert D. Brusen</a>
			</div>
			<div class="span6">								
				<div id="divHeaderLine1" class="pull-right">International Pianist</div>
				<div id="divHeaderLine2" class="pull-right">Singer Entertainer Writer Composer Lecturer</div>
			</div>
		</div>
		<div class="row">
			<div class="span8 offset4"><!-- start span 8 -->
				<!-- Start Menu Right -->						
				<div id="divMenuRight">
					<!-- Start Nav Bar -->	
					<div class="navbar pull-right">
						<button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
							NAVIGATION <span class="icon-chevron-down icon-white"></span>
						</button>
						<!-- Start Nav Collapse -->
						<div class="nav-collapse collapse">
							<?php print custompage_view_tile( 'navigation', $title=FALSE, $display_id = 'main_menu'); ?>
						</div><!-- end Nav Collapse -->
					</div><!-- end Nav Bar -->
				</div><!-- end Menu Right -->
			</div><!-- end span 8 -->
		</div>
		
		<header role="banner" id="page-header">
			<?php print render($page['header']); ?>
		</header> <!-- /#header -->
		
	</div>
</section>




<section class="drupal-section">
	<div class="container">
		<div class="row">
	
		<?php if ($page['sidebar_first']): ?>
		  <aside class="span3" role="complementary">
		    <?php print render($page['sidebar_first']); ?>
		  </aside>  <!-- /#sidebar-first -->
		<?php endif; ?>  
		
		<section class="<?php print _bootstrap_content_span($columns); ?>">  
		  <?php if ($page['highlighted']): ?>
		    <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
		  <?php endif; ?>
		  <?php /* if ($breadcrumb): print $breadcrumb; endif;  */?>
		  <a id="main-content"></a>
		  <?php print render($title_prefix); ?>
		  <?php if ($title): ?>
		    <h1 class="page-header"><?php print $title; ?></h1>
		  <?php endif; ?>
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
		  
		</section>
		
		<?php if ($page['sidebar_second']): ?>
		  <aside class="span3" role="complementary">
		    <?php print render($page['sidebar_second']); ?>
		  </aside>  <!-- /#sidebar-second -->
		<?php endif; ?>
	
		</div>
	</div>
</section>

<section class="main-content">
	<div class="container">
		<?php print render($page['content']); ?>
	</div>
</section>


<section id="footer-section">
	<div id="footerOuterSeparator"></div>
	<div id="divFooter" class="footerArea container"><!-- start div footer -->
		<div class="divPanel"><!-- start div panel -->
			<div class="row-fluid"><!-- start row fluid-->
				<div class="span3" id="footerArea1"><!-- start footer area 1 -->
					<?php print custompage_view_tile( 'footer', $title=FALSE, $display_id = 'footer_block_1' , 26); ?>
				</div><!-- end footer area 1 -->
				<div class="span3" id="footerArea2"><!-- start footer area 2 -->
				</div><!-- end footer area 2 -->
				<div class="span3" id="footerArea3"><!-- start footer area 3 -->
					<h3>Social Networks</h3>      					
					<?php print custompage_view_tile( 'footer', $title=FALSE, $display_id = 'social_networks'); ?>		
				</div><!-- end footer area 3 -->
				<div class="span3" id="footerArea4"><!-- start footer area 4 -->
					<h3>Get in Touch</h3>     					
					<?php print custompage_view_tile( 'footer', $title=FALSE, $display_id = 'footer_block_2'); ?>
				</div><!-- end footer area 4 -->
			</div><!-- end row fluid-->
			<br /><br />
			<div class="row-fluid"><!-- start row fluid-->
				<div class="span12"><!-- start span 12 -->
					<p id="copyright">Copyright © 2012 Bob Bellows. All Rights Reserved.</p>
				</div><!-- end span 12 -->
			</div><!-- start row fluid-->
		</div><!-- end div panel -->
	</div><!-- end div footer -->
</section>



<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Get in Touch</h3>
  </div>
  <div class="modal-body">
    <?php print custompage_view_tile( 'footer', $title=FALSE, $display_id = 'footer_block_2'); ?>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>




