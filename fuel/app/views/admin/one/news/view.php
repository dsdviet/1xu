<h2>Viewing #<?php echo $one_news->id; ?></h2>

<p>
	<strong>Title:</strong>
	<?php echo $one_news->title; ?></p>
<p>
	<strong>Content:</strong>
	<?php echo $one_news->content; ?></p>
<p>
	<strong>About:</strong>
	<?php echo $one_news->about; ?></p>
<p>
	<strong>Is active:</strong>
	<?php echo $one_news->is_active; ?></p>
<p>
	<strong>Is delete:</strong>
	<?php echo $one_news->is_delete; ?></p>

<?php echo Html::anchor('admin/one/news/edit/'.$one_news->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/one/news', 'Back'); ?>