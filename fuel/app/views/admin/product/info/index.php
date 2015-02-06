<h2>Listing Product_infos</h2>
<br>
<?php if ($product_infos): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Kind id</th>
			<th>Price</th>
			<th>Date</th>
			<th>Info</th>
			<th>Images</th>
			<th>Is active</th>
			<th>Is delete</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($product_infos as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->kind_id; ?></td>
			<td><?php echo $item->price; ?></td>
			<td><?php echo $item->date; ?></td>
			<td><?php echo $item->info; ?></td>
			<td><?php echo $item->images; ?></td>
			<td><?php echo $item->is_active; ?></td>
			<td><?php echo $item->is_delete; ?></td>
			<td>
				<?php echo Html::anchor('admin/product/info/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/product/info/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/product/info/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Product_infos.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/product/info/create', 'Add new Product info', array('class' => 'btn btn-success')); ?>

</p>
