<h2>Editing Account_info_table</h2>
<br>

<?php echo render('admin/account/info/table/_form'); ?>
<p>
	<?php echo Html::anchor('admin/account/info/table/view/'.$account_info_table->id, 'View'); ?> |
	<?php echo Html::anchor('admin/account/info/table', 'Back'); ?></p>
