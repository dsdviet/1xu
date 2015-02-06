<h2>Viewing #<?php echo $product_kind->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $product_kind->name; ?></p>
<p>
	<strong>Is active:</strong>
	<?php echo $product_kind->is_active; ?></p>
<p>
	<strong>Is delete:</strong>
	<?php echo $product_kind->is_delete; ?></p>

<?php echo Html::anchor('admin/product/kind/edit/'.$product_kind->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/product/kind', 'Back'); ?>