<h2>Viewing #<?php echo $product_sale->id; ?></h2>

<p>
	<strong>Product id:</strong>
	<?php echo $product_sale->product_id; ?></p>
<p>
	<strong>Price sale:</strong>
	<?php echo $product_sale->price_sale; ?></p>
<p>
	<strong>Is active:</strong>
	<?php echo $product_sale->is_active; ?></p>
<p>
	<strong>Is delete:</strong>
	<?php echo $product_sale->is_delete; ?></p>

<?php echo Html::anchor('admin/product/sale/edit/'.$product_sale->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/product/sale', 'Back'); ?>