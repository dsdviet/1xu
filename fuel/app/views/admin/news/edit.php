<h2>Editing News</h2>
<br>

<?php echo render('admin/news/_form'); ?>
<p>
	<?php echo Html::anchor('admin/news/view/'.$news->id, 'View'); ?> |
	<?php echo Html::anchor('admin/news', 'Back'); ?></p>
