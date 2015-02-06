<h2>Viewing #<?php echo $schudule_bid->id; ?></h2>

<p>
	<strong>Product bids id:</strong>
	<?php echo $schudule_bid->product_bids_id; ?></p>
<p>
	<strong>Time begin:</strong>
	<?php echo $schudule_bid->time_begin; ?></p>
<p>
	<strong>Time end:</strong>
	<?php echo $schudule_bid->time_end; ?></p>
<p>
	<strong>User create:</strong>
	<?php echo $schudule_bid->user_create; ?></p>
<p>
	<strong>Time extra:</strong>
	<?php echo $schudule_bid->time_extra; ?></p>
<p>
	<strong>Is active:</strong>
	<?php echo $schudule_bid->is_active; ?></p>
<p>
	<strong>Is delete:</strong>
	<?php echo $schudule_bid->is_delete; ?></p>

<?php echo Html::anchor('admin/schudule/bid/edit/'.$schudule_bid->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/schudule/bid', 'Back'); ?>