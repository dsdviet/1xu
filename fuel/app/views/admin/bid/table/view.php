<h2>Viewing #<?php echo $bid_table->id; ?></h2>

<p>
	<strong>Bid name:</strong>
	<?php echo $bid_table->bid_name; ?></p>
<p>
	<strong>Bid info:</strong>
	<?php echo $bid_table->bid_info; ?></p>
<p>
	<strong>Is active:</strong>
	<?php echo $bid_table->is_active; ?></p>
<p>
	<strong>Is delete:</strong>
	<?php echo $bid_table->is_delete; ?></p>

<?php echo Html::anchor('admin/bid/table/edit/'.$bid_table->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/bid/table', 'Back'); ?>