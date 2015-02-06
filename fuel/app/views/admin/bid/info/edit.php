<h2>Editing Bid_info</h2>
<br>

<?php echo render('admin/bid/info/_form'); ?>
<p>
	<?php echo Html::anchor('admin/bid/info/view/'.$bid_info->id, 'View'); ?> |
	<?php echo Html::anchor('admin/bid/info', 'Back'); ?></p>
