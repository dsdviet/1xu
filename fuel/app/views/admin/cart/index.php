<h2>Listing Carts</h2>
<br>
<?php if ($carts): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Product id</th>
			<th>User id</th>
			<th>Date</th>
			<th>Is active</th>
			<th>Is delete</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($carts as $item): ?>		<tr>

			<td><?php echo $item->product_id; ?></td>
			<td><?php echo $item->user_id; ?></td>
			<td><?php echo $item->date; ?></td>
			<td><?php echo $item->is_active; ?></td>
			<td><?php echo $item->is_delete; ?></td>
			<td>
				<?php echo Html::anchor('admin/cart/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/cart/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/cart/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Carts.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/cart/create', 'Add new Cart', array('class' => 'btn btn-success')); ?>

</p>
