<h2>Listing Product_sales</h2>
<br>
<?php if ($product_sales): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Product id</th>
			<th>Price sale</th>
			<th>Is active</th>
			<th>Is delete</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($product_sales as $item): ?>		<tr>

			<td><?php echo $item->product_id; ?></td>
			<td><?php echo $item->price_sale; ?></td>
			<td><?php echo $item->is_active; ?></td>
			<td><?php echo $item->is_delete; ?></td>
			<td>
				<?php echo Html::anchor('admin/product/sale/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/product/sale/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/product/sale/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Product_sales.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/product/sale/create', 'Add new Product sale', array('class' => 'btn btn-success')); ?>

</p>
