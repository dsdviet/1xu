<h2>Editing Bid_table</h2>
<br>

<?php echo render('admin/bid/table/_form'); ?>
<p>
	<?php echo Html::anchor('admin/bid/table/view/'.$bid_table->id, 'View'); ?> |
	<?php echo Html::anchor('admin/bid/table', 'Back'); ?></p>
