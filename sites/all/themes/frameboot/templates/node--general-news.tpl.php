<div class="container">
	<div class="row-fluid">
		<div class="span9">
			<?php print custompage_view_tile( 'news', $title=FALSE, $display_id = 'news_item' , $node->nid ); ?>
		</div>
		<div class="span3">
			<?php print custompage_view_tile( 'news', $title="Other News", $display_id = 'other_news', $node->nid ); ?>
		</div>
	</div>
</div>
