<h2>Listing Bid_histories</h2>
<br>
<?php if ($bid_histories): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Bid kind</th>
			<th>User id</th>
			<th>Bids</th>
			<th>Date</th>
			<th>Is active</th>
			<th>Is delete</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($bid_histories as $item): ?>		<tr>

			<td><?php echo $item->bid_kind; ?></td>
			<td><?php echo $item->user_id; ?></td>
			<td><?php echo $item->bids; ?></td>
			<td><?php echo $item->date; ?></td>
			<td><?php echo $item->is_active; ?></td>
			<td><?php echo $item->is_delete; ?></td>
			<td>
				<?php echo Html::anchor('admin/bid/history/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/bid/history/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/bid/history/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Bid_histories.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/bid/history/create', 'Add new Bid history', array('class' => 'btn btn-success')); ?>

</p>
