<h2>Listing One_news</h2>
<br>
<?php if ($one_news): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Content</th>
			<th>About</th>
			<th>Is active</th>
			<th>Is delete</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($one_news as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->content; ?></td>
			<td><?php echo $item->about; ?></td>
			<td><?php echo $item->is_active; ?></td>
			<td><?php echo $item->is_delete; ?></td>
			<td>
				<?php echo Html::anchor('admin/one/news/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/one/news/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/one/news/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No One_news.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/one/news/create', 'Add new One news', array('class' => 'btn btn-success')); ?>

</p>
