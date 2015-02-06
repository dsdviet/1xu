<h2>Editing Product_sale</h2>
<br>

<?php echo render('admin/product/sale/_form'); ?>
<p>
	<?php echo Html::anchor('admin/product/sale/view/'.$product_sale->id, 'View'); ?> |
	<?php echo Html::anchor('admin/product/sale', 'Back'); ?></p>
