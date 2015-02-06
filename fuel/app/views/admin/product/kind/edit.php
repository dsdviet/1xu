<h2>Editing Product_kind</h2>
<br>

<?php echo render('admin/product/kind/_form'); ?>
<p>
	<?php echo Html::anchor('admin/product/kind/view/'.$product_kind->id, 'View'); ?> |
	<?php echo Html::anchor('admin/product/kind', 'Back'); ?></p>
