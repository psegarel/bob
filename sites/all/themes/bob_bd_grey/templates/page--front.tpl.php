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
					<div id="divMenuRight" class="pull-right">
						<!-- Start Nav Bar -->	
						<div class="navbar">
							<button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
								NAVIGATION <span class="icon-chevron-down icon-white"></span>
							</button>
							<!-- Start Nav Collapse -->
							<div class="nav-collapse collapse">
								<ul class="nav nav-pills ddmenu">
									<li class="dropdown"><a href="/">Home</a></li> 
									<li class="dropdown"><a href="/gallery">Gallery</a></li>
									<li class="dropdown"><a href="/about">About</a></li>
									<li class="dropdown"><a href="#myModal" data-toggle="modal">Contact</a></li>
									
								</ul>
							</div><!-- end Nav Collapse -->
						</div><!-- end Nav Bar -->
					</div><!-- end Menu Right -->
				</div><!-- end span 6 -->
			</div><!-- end row fluid	 -->

		</div><!-- end div Panel -->
	</div><!-- end divBoxed -->	
</section>

<section id="content-section">
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
							<div>
								<a class="btn btn-large btn-primary" target="_blank" href="http://www.cdbaby.com/Artist/BobBellows">Bob Bellows at CD Baby</a>
							</div>
						</div>							
					</div><!-- end span 6 -->
					<div class="span6"><!-- start carousel -->
						<div id="myCarousel" class="carousel slide">
						  <!-- Carousel items -->
						  <div class="carousel-inner">
						    <div class="active item">
						    	<img src="sites/default/files/images/bob-5-7.jpg" />
						    	<div class="carousel-caption">
						    		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						    	</div>
						    </div>
						    <div class="item">
						    	<img src="sites/default/files/images/DSC00971.jpg" />
						    	<div class="carousel-caption">
						    		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						    	</div>
						    </div>
						    <div class="item">
						    	<img src="sites/default/files/images/Bob-Niko-ParaAsia-Games-Performance.jpg" />
						    	<div class="carousel-caption">
						    		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						    	</div>
						    </div>
						    <div class="item">
						    	<img src="sites/default/files/images/clear_piano.jpg" />
						    	<div class="carousel-caption">
						    		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						    	</div>
						    </div>
						  </div>
						  <!-- Carousel nav -->
						  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
						  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
						</div>										
					</div><!-- end carousel -->
				</div><!-- end row fluid -->
				<div id="headerSeparator2"></div>
			</div><!-- end span12 -->
		</div><!-- end row fluid -->
		<div class="row-fluid"><!-- start row fluid -->
			<div class="span12" id="divMain"><!-- start span 12 -->
<!--
				<h1>Full Width</h1>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
				Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus. </p>
				
-->
				<div class="row-fluid"><!-- start row fluid -->
					<?php print custompage_view_tile( 'news', $title=FALSE, $display_id = 'front_news'); ?>
				</div><!-- end row fluid -->
				
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<div class="row-fluid"><!-- start row fluid -->
					<div class="span8"><!-- start span 8 -->
						<p>
						<img src="/sites/default/files/images/thumbs/allofme.png" alt="" style="float: left; margin: 5px 15px 5px 0px;" />
						<h2>All of Me</h2>
						Just published book "ALL OF ME" in Chinese and in English with 30 pages of pictures plus a CD. <a href="http://www.cdbaby.com/Artist/BobBellows" target="_blank" >NOW AVAILABLE FROM CDBABY</a>. This is the story of international entertainer,pianist/singer Bob Bellows. CD is English,Chinese.French/Mongolian and Japanese songs. <a href="#">Read More &raquo;</a>
						</p>
					</div><!-- end span 8 -->
					<div class="span4"><!-- start span 4 -->
						<div class="sidebox">
						<h3 class="sidebox-title">Downloads</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="#">Lorem Ipsum</a> has been the industry’s standard dummy text ever since the 1500s.</p>                                 
					</div><!-- end span 4 -->
				</div><!-- end row fluid -->
				</div><!-- end row fluid -->
			</div><!-- end span 12 -->
		</div><!-- end row fluid -->
	<div id="footerInnerSeparator"></div>
	</div><!-- end div Panel -->
</div><!-- end Content Area -->
</section>


<section id="footer-section">
	<div id="footerOuterSeparator"></div>
	<div id="divFooter" class="footerArea container"><!-- start div footer -->
		<div class="divPanel"><!-- start div panel -->
			<div class="row-fluid"><!-- start row fluid-->
				<div class="span3" id="footerArea1"><!-- start footer area 1 -->
					<h3>About <?php print $site_name;?></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p><p> 
<!--
					<a href="#" title="Terms of Use">Terms of Use</a><br />
					<a href="#" title="Privacy Policy">Privacy Policy</a><br />
					<a href="#" title="FAQ">FAQ</a><br />
-->
					<!-- <a href="#" title="Sitemap">Sitemap</a> -->
					</p>
				</div><!-- end footer area 1 -->
				<div class="span3" id="footerArea2"><!-- start footer area 2 -->
					<h3>Recent News</h3> 
					<p>
					<a href="#" title="">Lorem Ipsum is simply dummy text</a><br />
					<span style="text-transform:none;">2 hours ago</span>
					</p>
					<p>
					<a href="#" title="">Duis mollis, est non commodo luctus</a><br />
					<span style="text-transform:none;">5 hours ago</span>
					</p>
					<p>
					<a href="#" title="">Maecenas sed diam eget risus varius</a><br />
					<span style="text-transform:none;">19 hours ago</span>
					</p>
					<p>
					<a href="#" title="">VIEW ALL POSTS</a>
					</p>
				</div><!-- end footer area 2 -->
				<div class="span3" id="footerArea3"><!-- start footer area 3 -->
					<h3>Social Networks</h3> 
					<ul>
						<li><a href="#"><span class="glyph social">e</span> Twitter</a></li>
						<li><a href="#"><span class="glyph social">d</span> Facebook</a></li>
						<li><a href="#"><span class="glyph social">r</span> Skype</a></li>
						<li><a href="#"><span class="glyph social">o</span> SoundCloud</a></li>
					</ul>			
				</div><!-- end footer area 3 -->
				<div class="span3" id="footerArea4"><!-- start footer area 4 -->
					<h3>Get in Touch</h3>                
					<ul id="contact-info">
						<li>                                    
							<span class="glyph general icon">r</span>
							<span class="field">Phone:</span>
							<br />
							(123) 456 7890 / 456 7891                                                                      
						</li>
						<li>
							<span class="glyph general icon">h</span>
							
							<span class="field">Email:</span>
							<br />
							<a href="mailto:info@yourdomain.com" title="Email">info@yourdomain.com</a>
						</li>
						<li>
							<span class="glyph general icon" style="margin-bottom:50px">m</span>
							
							<span class="field">Address:</span>
							<br />
							123 Street<br />
							12345 City, State<br />
						Country
						</li>
					</ul>
				</div><!-- start footer area 4 -->
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
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <p>Put the contact form here!</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>