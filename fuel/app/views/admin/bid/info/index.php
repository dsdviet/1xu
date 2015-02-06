<h2>Listing Bid_infos</h2>
<br>
<?php if ($bid_infos): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Bid kind</th>
			<th>User id</th>
			<th>Bids</th>
			<th>Is active</th>
			<th>Is delete</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($bid_infos as $item): ?>		<tr>

			<td><?php echo $item->bid_kind; ?></td>
			<td><?php echo $item->user_id; ?></td>
			<td><?php echo $item->bids; ?></td>
			<td><?php echo $item->is_active; ?></td>
			<td><?php echo $item->is_delete; ?></td>
			<td>
				<?php echo Html::anchor('admin/bid/info/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/bid/info/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/bid/info/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Bid_infos.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/bid/info/create', 'Add new Bid info', array('class' => 'btn btn-success')); ?>

</p>
