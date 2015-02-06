<h2>Viewing #<?php echo $bid_history->id; ?></h2>

<p>
	<strong>Bid kind:</strong>
	<?php echo $bid_history->bid_kind; ?></p>
<p>
	<strong>User id:</strong>
	<?php echo $bid_history->user_id; ?></p>
<p>
	<strong>Bids:</strong>
	<?php echo $bid_history->bids; ?></p>
<p>
	<strong>Date:</strong>
	<?php echo $bid_history->date; ?></p>
<p>
	<strong>Is active:</strong>
	<?php echo $bid_history->is_active; ?></p>
<p>
	<strong>Is delete:</strong>
	<?php echo $bid_history->is_delete; ?></p>

<?php echo Html::anchor('admin/bid/history/edit/'.$bid_history->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/bid/history', 'Back'); ?>