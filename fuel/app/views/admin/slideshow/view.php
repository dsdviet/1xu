<h2>Viewing #<?php echo $slideshow->id; ?></h2>

<p>
	<strong>Title:</strong>
	<?php echo $slideshow->title; ?></p>
<p>
	<strong>Images:</strong>
	<?php echo $slideshow->images; ?></p>
<p>
	<strong>Link:</strong>
	<?php echo $slideshow->link; ?></p>
<p>
	<strong>Is active:</strong>
	<?php echo $slideshow->is_active; ?></p>
<p>
	<strong>Is delete:</strong>
	<?php echo $slideshow->is_delete; ?></p>

<?php echo Html::anchor('admin/slideshow/edit/'.$slideshow->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/slideshow', 'Back'); ?>