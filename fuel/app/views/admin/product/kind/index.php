<h2>Listing Product_kinds</h2>
<br>
<?php if ($product_kinds): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Is active</th>
			<th>Is delete</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($product_kinds as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->is_active; ?></td>
			<td><?php echo $item->is_delete; ?></td>
			<td>
				<?php echo Html::anchor('admin/product/kind/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/product/kind/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/product/kind/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Product_kinds.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/product/kind/create', 'Add new Product kind', array('class' => 'btn btn-success')); ?>

</p>
