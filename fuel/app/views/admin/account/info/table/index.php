<h2>Listing Account_info_tables</h2>
<br>
<?php if ($account_info_tables): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>User id</th>
			<th>Card pay</th>
			<th>Card number</th>
			<th>Card security</th>
			<th>Date expiration</th>
			<th>Is active</th>
			<th>Is delete</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($account_info_tables as $item): ?>		<tr>

			<td><?php echo $item->user_id; ?></td>
			<td><?php echo $item->card_pay; ?></td>
			<td><?php echo $item->card_number; ?></td>
			<td><?php echo $item->card_security; ?></td>
			<td><?php echo $item->date_expiration; ?></td>
			<td><?php echo $item->is_active; ?></td>
			<td><?php echo $item->is_delete; ?></td>
			<td>
				<?php echo Html::anchor('admin/account/info/table/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/account/info/table/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/account/info/table/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Account_info_tables.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/account/info/table/create', 'Add new Account info table', array('class' => 'btn btn-success')); ?>

</p>
