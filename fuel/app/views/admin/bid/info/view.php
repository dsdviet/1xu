<h2>Viewing #<?php echo $bid_info->id; ?></h2>

<p>
	<strong>Bid kind:</strong>
	<?php echo $bid_info->bid_kind; ?></p>
<p>
	<strong>User id:</strong>
	<?php echo $bid_info->user_id; ?></p>
<p>
	<strong>Bids:</strong>
	<?php echo $bid_info->bids; ?></p>
<p>
	<strong>Is active:</strong>
	<?php echo $bid_info->is_active; ?></p>
<p>
	<strong>Is delete:</strong>
	<?php echo $bid_info->is_delete; ?></p>

<?php echo Html::anchor('admin/bid/info/edit/'.$bid_info->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/bid/info', 'Back'); ?>