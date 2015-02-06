<h2>Editing Cart</h2>
<br>

<?php echo render('admin/cart/_form'); ?>
<p>
	<?php echo Html::anchor('admin/cart/view/'.$cart->id, 'View'); ?> |
	<?php echo Html::anchor('admin/cart', 'Back'); ?></p>
