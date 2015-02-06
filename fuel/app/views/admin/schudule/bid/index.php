<h2>Listing Schudule_bids</h2>
<br>
<?php if ($schudule_bids): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Product bids id</th>
			<th>Time begin</th>
			<th>Time end</th>
			<th>User create</th>
			<th>Time extra</th>
			<th>Is active</th>
			<th>Is delete</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($schudule_bids as $item): ?>		<tr>

			<td><?php echo $item->product_bids_id; ?></td>
			<td><?php echo $item->time_begin; ?></td>
			<td><?php echo $item->time_end; ?></td>
			<td><?php echo $item->user_create; ?></td>
			<td><?php echo $item->time_extra; ?></td>
			<td><?php echo $item->is_active; ?></td>
			<td><?php echo $item->is_delete; ?></td>
			<td>
				<?php echo Html::anchor('admin/schudule/bid/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/schudule/bid/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/schudule/bid/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Schudule_bids.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/schudule/bid/create', 'Add new Schudule bid', array('class' => 'btn btn-success')); ?>

</p>
