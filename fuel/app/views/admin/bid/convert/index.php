<h2>Listing Bid_converts</h2>
<br>
<?php if ($bid_converts): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Bid kind</th>
			<th>Price</th>
			<th>Is active</th>
			<th>Is delete</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($bid_converts as $item): ?>		<tr>

			<td><?php echo $item->bid_kind; ?></td>
			<td><?php echo $item->price; ?></td>
			<td><?php echo $item->is_active; ?></td>
			<td><?php echo $item->is_delete; ?></td>
			<td>
				<?php echo Html::anchor('admin/bid/convert/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/bid/convert/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/bid/convert/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Bid_converts.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/bid/convert/create', 'Add new Bid convert', array('class' => 'btn btn-success')); ?>

</p>
