<section id="about">
<div class="container">
	<div class="divPanel page-content">
		<div class="row-fluid">
		
			<div class="span8" id="divMain">
				<?php print custompage_view_tile( 'pages', $title=FALSE, $display_id = 'page_illustration' , 18); ?>
				<?php print custompage_view_tile( 'pages', $title=FALSE, $display_id = 'about_page' , 18); ?>
			</div><!-- end span 8 -->
			
			<div class="span4 sidebar">
				<div class="sidebox">
			    	<h3 class="sidebox-title">"All of Me"</h3>
				    <?php print custompage_view_tile( 'pages', $title=FALSE, $display_id = 'about_page' , 19); ?>
				    <br/>
				    <?php print custompage_view_tile( 'links', $title=FALSE, $display_id = 'primary_link' , 20); ?>
					<br/>
				    <?php print custompage_view_tile( 'pages', $title=FALSE, $display_id = 'about_page' , 21); ?>
			    </div>	
				<div class="sidebox">
				    <?php print custompage_view_tile( 'pages', $title=FALSE, $display_id = 'about_page' , 22); ?>
			    </div>					                         
			</div><!-- end span 4 -->                   
		</div><!-- end row fluid -->
	</div><!-- end div Panel -->
</div><!-- end container -->
</section>