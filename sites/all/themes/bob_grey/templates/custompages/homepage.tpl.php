<div class="row">
	<div class="span12"><!-- start span12 -->
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
	</div><!-- end span12 -->
</div>

<div id="divHeaderLine5" class="row page-content"><!-- start row fluid -->
	<div class="span3">
		<img src="/sites/default/files/images/AllOfMe_02.png" alt="Book Cover"  title="Book Cover"/>
	</div>
	<div class="span9">
		<h2>All of Me</h2>
		<?php print custompage_view_tile( 'pages', $title=FALSE, $display_id = 'about_page' , 19); ?>
	    <br/>
		<?php print custompage_view_tile( 'links', $title=FALSE, $display_id = 'badge' , 23); ?>
	</div>
</div><!-- end row fluid -->
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="row-fluid"><!-- start row fluid -->
	<?php print custompage_view_tile( 'news', $title=FALSE, $display_id = 'front_news'); ?>
</div><!-- end row fluid -->
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<h2>Videos</h2>
<div class="row-fluid">
	<?php  print custompage_view_tile( 'gallery', $title=FALSE , $display_id = 'front_videos');?>
</div>