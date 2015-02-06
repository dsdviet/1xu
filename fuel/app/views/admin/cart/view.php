<h2>Viewing #<?php echo $cart->id; ?></h2>

<p>
	<strong>Product id:</strong>
	<?php echo $cart->product_id; ?></p>
<p>
	<strong>User id:</strong>
	<?php echo $cart->user_id; ?></p>
<p>
	<strong>Date:</strong>
	<?php echo $cart->date; ?></p>
<p>
	<strong>Is active:</strong>
	<?php echo $cart->is_active; ?></p>
<p>
	<strong>Is delete:</strong>
	<?php echo $cart->is_delete; ?></p>

<?php echo Html::anchor('admin/cart/edit/'.$cart->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/cart', 'Back'); ?>