<h2>Viewing #<?php echo $news->id; ?></h2>

<p>
	<strong>Title:</strong>
	<?php echo $news->title; ?></p>
<p>
	<strong>Content:</strong>
	<?php echo $news->content; ?></p>
<p>
	<strong>Is active:</strong>
	<?php echo $news->is_active; ?></p>
<p>
	<strong>Is delete:</strong>
	<?php echo $news->is_delete; ?></p>

<?php echo Html::anchor('admin/news/edit/'.$news->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/news', 'Back'); ?>