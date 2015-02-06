<h2>Listing News</h2>
<br>
<?php if ($news): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Content</th>
			<th>Is active</th>
			<th>Is delete</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($news as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->content; ?></td>
			<td><?php echo $item->is_active; ?></td>
			<td><?php echo $item->is_delete; ?></td>
			<td>
				<?php echo Html::anchor('admin/news/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/news/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/news/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No News.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/news/create', 'Add new News', array('class' => 'btn btn-success')); ?>

</p>
