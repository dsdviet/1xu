<h2>Viewing #<?php echo $bid_session->id; ?></h2>

<p>
	<strong>User id:</strong>
	<?php echo $bid_session->user_id; ?></p>
<p>
	<strong>Product id:</strong>
	<?php echo $bid_session->product_id; ?></p>
<p>
	<strong>Lasted bid:</strong>
	<?php echo $bid_session->lasted_bid; ?></p>
<p>
	<strong>Is active:</strong>
	<?php echo $bid_session->is_active; ?></p>
<p>
	<strong>Is delete:</strong>
	<?php echo $bid_session->is_delete; ?></p>

<?php echo Html::anchor('admin/bid/session/edit/'.$bid_session->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/bid/session', 'Back'); ?>