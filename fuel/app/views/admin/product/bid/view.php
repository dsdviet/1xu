<h2>Viewing #<?php echo $product_bid->id; ?></h2>

<p>
	<strong>Product id:</strong>
	<?php echo $product_bid->product_id; ?></p>
<p>
	<strong>Price bid:</strong>
	<?php echo $product_bid->price_bid; ?></p>
<p>
	<strong>Is active:</strong>
	<?php echo $product_bid->is_active; ?></p>
<p>
	<strong>Is delete:</strong>
	<?php echo $product_bid->is_delete; ?></p>

<?php echo Html::anchor('admin/product/bid/edit/'.$product_bid->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/product/bid', 'Back'); ?>