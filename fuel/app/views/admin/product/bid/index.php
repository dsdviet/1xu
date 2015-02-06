<h2>Listing Product_bids</h2>
<br>
<?php if ($product_bids): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Product id</th>
			<th>Price bid</th>
			<th>Is active</th>
			<th>Is delete</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($product_bids as $item): ?>		<tr>

			<td><?php echo $item->product_id; ?></td>
			<td><?php echo $item->price_bid; ?></td>
			<td><?php echo $item->is_active; ?></td>
			<td><?php echo $item->is_delete; ?></td>
			<td>
				<?php echo Html::anchor('admin/product/bid/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/product/bid/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/product/bid/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Product_bids.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/product/bid/create', 'Add new Product bid', array('class' => 'btn btn-success')); ?>

</p>
