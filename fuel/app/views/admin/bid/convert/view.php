<h2>Viewing #<?php echo $bid_convert->id; ?></h2>

<p>
	<strong>Bid kind:</strong>
	<?php echo $bid_convert->bid_kind; ?></p>
<p>
	<strong>Price:</strong>
	<?php echo $bid_convert->price; ?></p>
<p>
	<strong>Is active:</strong>
	<?php echo $bid_convert->is_active; ?></p>
<p>
	<strong>Is delete:</strong>
	<?php echo $bid_convert->is_delete; ?></p>

<?php echo Html::anchor('admin/bid/convert/edit/'.$bid_convert->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/bid/convert', 'Back'); ?>