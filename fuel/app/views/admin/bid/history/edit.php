<h2>Editing Bid_history</h2>
<br>

<?php echo render('admin/bid/history/_form'); ?>
<p>
	<?php echo Html::anchor('admin/bid/history/view/'.$bid_history->id, 'View'); ?> |
	<?php echo Html::anchor('admin/bid/history', 'Back'); ?></p>
