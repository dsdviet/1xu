<h2>Listing Bid_sessions</h2>
<br>
<?php if ($bid_sessions): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>User id</th>
			<th>Product id</th>
			<th>Lasted bid</th>
			<th>Is active</th>
			<th>Is delete</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($bid_sessions as $item): ?>		<tr>

			<td><?php echo $item->user_id; ?></td>
			<td><?php echo $item->product_id; ?></td>
			<td><?php echo $item->lasted_bid; ?></td>
			<td><?php echo $item->is_active; ?></td>
			<td><?php echo $item->is_delete; ?></td>
			<td>
				<?php echo Html::anchor('admin/bid/session/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/bid/session/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/bid/session/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Bid_sessions.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/bid/session/create', 'Add new Bid session', array('class' => 'btn btn-success')); ?>

</p>
