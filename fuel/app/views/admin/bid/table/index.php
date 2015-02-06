<h2>Listing Bid_tables</h2>
<br>
<?php if ($bid_tables): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Bid name</th>
			<th>Bid info</th>
			<th>Is active</th>
			<th>Is delete</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($bid_tables as $item): ?>		<tr>

			<td><?php echo $item->bid_name; ?></td>
			<td><?php echo $item->bid_info; ?></td>
			<td><?php echo $item->is_active; ?></td>
			<td><?php echo $item->is_delete; ?></td>
			<td>
				<?php echo Html::anchor('admin/bid/table/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/bid/table/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/bid/table/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Bid_tables.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/bid/table/create', 'Add new Bid table', array('class' => 'btn btn-success')); ?>

</p>
