<h2>Listing <span class='muted'>Customers</span></h2>
<br>
<?php if ($customers): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Birthday</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Email</th>
			<th>Is active</th>
			<th>Is delete</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($customers as $item): ?>		<tr>

			<td><?php echo $item->username; ?></td>
			<td><?php echo $item->password; ?></td>
			<td><?php echo $item->firstname; ?></td>
			<td><?php echo $item->lastname; ?></td>
			<td><?php echo $item->birthday; ?></td>
			<td><?php echo $item->phone; ?></td>
			<td><?php echo $item->address; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php echo $item->is_active; ?></td>
			<td><?php echo $item->is_delete; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('customers/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('customers/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('customers/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Customers.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('customers/create', 'Add new Customer', array('class' => 'btn btn-success')); ?>

</p>
