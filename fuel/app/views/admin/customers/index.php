<h2>Listing Customers</h2>
<br>
<?php if ($customers): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Username</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Birthday</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Email</th>
                        <th>active</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($customers as $item): ?>		<tr>

			<td><?php echo $item->username; ?></td>
			
			<td><?php echo $item->firstname; ?></td>
			<td><?php echo $item->lastname; ?></td>
			<td><?php echo $item->birthday; ?></td>
			<td><?php echo $item->phone; ?></td>
			<td><?php echo $item->address; ?></td>
			<td><?php echo $item->email; ?></td>
                        <td><?php if($item->is_active==1&&$item->is_delete==0){echo "On";} else{echo 'OFF';}; ?></td>
			
			<td>
				<?php echo Html::anchor('admin/customers/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/customers/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/customers/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Customers.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/customers/create', 'Add new Customer', array('class' => 'btn btn-success')); ?>

</p>
