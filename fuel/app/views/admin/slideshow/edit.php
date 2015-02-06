<h2>Editing Slideshow</h2>
<br>

<?php echo render('admin/slideshow/_form'); ?>
<p>
	<?php echo Html::anchor('admin/slideshow/view/'.$slideshow->id, 'View'); ?> |
	<?php echo Html::anchor('admin/slideshow', 'Back'); ?></p>
