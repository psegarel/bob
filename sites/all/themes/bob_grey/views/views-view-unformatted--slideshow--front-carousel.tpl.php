<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
 
 // Create a variable that increments at each iteration, this will allow us 
 //to act on the first slide
 $count = 0;
?>

<?php foreach ($rows as $id => $row): ?>
<?php if($count == 0): ?>
<?php echo '<div class="active item">' ;?>
<?php elseif($count > 0): ?>
<?php echo '<div class="item">' ;?>
<?php endif; ?>	
    <?php print $row; ?>
  </div>
<?php $count++; ?>  
<?php endforeach; ?>