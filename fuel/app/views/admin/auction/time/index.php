<h2>Listing Auction_times</h2>
<br>
<?php if ($auction_times): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>User id</th>
			<th>Date</th>
			<th>Product id</th>
			<th>Is active</th>
			<th>Is delete</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($auction_times as $item): ?>		<tr>

			<td><?php echo $item->user_id; ?></td>
			<td><?php echo $item->date; ?></td>
			<td><?php echo $item->product_id; ?></td>
			<td><?php echo $item->is_active; ?></td>
			<td><?php echo $item->is_delete; ?></td>
			<td>
				<?php echo Html::anchor('admin/auction/time/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/auction/time/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/auction/time/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Auction_times.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/auction/time/create', 'Add new Auction time', array('class' => 'btn btn-success')); ?>

</p>
