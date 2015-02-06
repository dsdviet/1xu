<h2>Viewing #<?php echo $product_info->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $product_info->name; ?></p>
<p>
	<strong>Kind id:</strong>
	<?php echo $product_info->kind_id; ?></p>
<p>
	<strong>Price:</strong>
	<?php echo $product_info->price; ?></p>
<p>
	<strong>Date:</strong>
	<?php echo $product_info->date; ?></p>
<p>
	<strong>Info:</strong>
	<?php echo $product_info->info; ?></p>
<p>
	<strong>Images:</strong>
	<?php echo $product_info->images; ?></p>
<p>
	<strong>Is active:</strong>
	<?php echo $product_info->is_active; ?></p>
<p>
	<strong>Is delete:</strong>
	<?php echo $product_info->is_delete; ?></p>

<?php echo Html::anchor('admin/product/info/edit/'.$product_info->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/product/info', 'Back'); ?>