<h2>Viewing #<?php echo $auction_time->id; ?></h2>

<p>
	<strong>User id:</strong>
	<?php echo $auction_time->user_id; ?></p>
<p>
	<strong>Date:</strong>
	<?php echo $auction_time->date; ?></p>
<p>
	<strong>Product id:</strong>
	<?php echo $auction_time->product_id; ?></p>
<p>
	<strong>Is active:</strong>
	<?php echo $auction_time->is_active; ?></p>
<p>
	<strong>Is delete:</strong>
	<?php echo $auction_time->is_delete; ?></p>

<?php echo Html::anchor('admin/auction/time/edit/'.$auction_time->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/auction/time', 'Back'); ?>