<section id="header-section">
	<div class="container">
		<div class="row">
			<div id="divLogo" class="span6">					
				<a href="/" id="divSiteTitle"><?php print $site_name; ?></a><br />
				<a href="/" id="divTagLine">Robert D. Brusen</a>
			</div>
			<div class="span6">								
				<div id="divHeaderLine1" class="pull-right">International Pianist</div>
				<div id="divHeaderLine2" class="pull-right">Singer Entertainer Writer Composer Lecturer</div>
			</div>
			
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
	</div>
</section>

<section id="content-section" class="clearfix">
</section>


	<div class="container">
		<div class="row">
			<div id="divHeaderLine3" class="span6">
			
				<?php print views_embed_view( 'references', $display_id = 'front_reference'); ?>					
			</div>
		</div>
	</div>