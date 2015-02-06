<h2>Editing One_news</h2>
<br>

<?php echo render('admin/one/news/_form'); ?>
<p>
	<?php echo Html::anchor('admin/one/news/view/'.$one_news->id, 'View'); ?> |
	<?php echo Html::anchor('admin/one/news', 'Back'); ?></p>
