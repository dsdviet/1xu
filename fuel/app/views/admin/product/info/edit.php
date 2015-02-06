<h2>Editing Product_info</h2>
<br>

<?php echo render('admin/product/info/_form'); ?>
<p>
	<?php echo Html::anchor('admin/product/info/view/'.$product_info->id, 'View'); ?> |
	<?php echo Html::anchor('admin/product/info', 'Back'); ?></p>
