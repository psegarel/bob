<section id="header-section">
	<!-- start divBoxed -->	
	<div id="divBoxed" class="container">
		<div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>
		<!-- start div Panel -->
		<div class="divPanel notop nobottom">
			<!-- start row fluid	 -->
			<div class="row-fluid">
				<div class="span6">					
					<div id="divLogo">
						<a href="/" id="divSiteTitle"><?php print $site_name; ?></a><br />
						<a href="/" id="divTagLine">Robert D. Brusen</a>
					</div>
				</div>
				<div class="span6">								
					<div id="divHeaderLine1" class="pull-right">International Pianist</div>
					<div id="divHeaderLine2" class="pull-right">Singer Entertainer Writer Composer Lecturer</div>
				</div>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<div class="span6"><!-- start span 6 -->
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
				</div><!-- end span 6 -->
			</div><!-- end row fluid	 -->

		</div><!-- end div Panel -->
	</div><!-- end divBoxed -->	
</section>

<section id="content-section" class="clearfix">
<!-- start Content Area -->
<div class="contentArea container">
	<div class="divPanel notop page-content"><!-- start div Panel -->	
		
		<!-- start row fluid -->
		<div class="row-fluid">
			<div class="span12"><!-- start span12 -->
				<div id="headerSeparator"></div>
				<div class="row-fluid"><!-- start row fluid -->
					<div class="span6"><!-- start span 6 -->
						<div id="divHeaderText" class="page-content">
							<div id="divHeaderLine3">
								<?php print custompage_view_tile( 'references', $title=FALSE, $display_id = 'front_reference'); ?>
								<p>&nbsp;</p>							
							</div>
							
							<!-- Buy Badges -->
							<div class="row-fluid">
								<div class="span3">
									<?php print custompage_view_tile( 'links', $title=FALSE, $display_id = 'badge' , 23); ?>
								</div>
								<div class="span3">
									<?php print custompage_view_tile( 'links', $title=FALSE, $display_id = 'badge' , 41); ?>
								</div>
							</div>
							
						</div>							
					</div><!-- end span 6 -->
				
					<div class="span6"><!-- start carousel -->
						<?php print custompage_view_tile( 'slideshow', $title=FALSE, $display_id = 'front_carousel'); ?>									
					</div><!-- end carousel -->
				</div><!-- end row fluid -->
				<div id="headerSeparator2"></div>
			</div><!-- end span12 -->
		</div><!-- end row fluid -->
	</div><!-- end div Panel -->
</div><!-- end Content Area -->
</section>

<section id="top-mid-section">
	<div class="container">
		<div class="row-fluid"><!-- start row fluid -->
			<div id="divHeaderLine5" class="span12" class="page-content"><!-- start span 12 -->
				<div class="span3">
					<img src="/sites/default/files/images/AllOfMe_02.png" alt="Book Cover"  title="Book Cover"/>
				</div>
				<div class="span9">
					<h2>All of Me</h2>
					<?php print custompage_view_tile( 'pages', $title=FALSE, $display_id = 'about_page' , 19); ?>
				    <br/>
					<?php print custompage_view_tile( 'links', $title=FALSE, $display_id = 'badge' , 23); ?>
				</div>
			</div><!-- end span 12 -->
		</div><!-- end row fluid -->	
	</div>
</section>

<section id="mid-section">
	<div class="container">
		<div class="divPanel notop page-content"><!-- start div Panel -->
			<div id="footerInnerSeparator"></div>	
			<div class="row-fluid"><!-- start row fluid -->
				<div class="span12" id="divMain"><!-- start span 12 -->
	
					<div class="row-fluid"><!-- start row fluid -->
						<?php print custompage_view_tile( 'news', $title=FALSE, $display_id = 'front_news'); ?>
					</div><!-- end row fluid -->
									
					</div><!-- end row fluid -->
				</div><!-- end span 12 -->
			</div><!-- end row fluid -->
		</div>
	</div>
</section>

<section id="bottom-section">
	<div class="container">	
		<div class="divPanel notop page-content"><!-- start div Panel -->
			<!-- Video Gallery -->
			<h2>Videos</h2>
			<div class="row-fluid">
				<div class="span12">
					<?php  print custompage_view_tile( 'gallery', $title=FALSE , $display_id = 'front_videos');?>
				</div>
			</div>
		</div>
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
				&nbsp;
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