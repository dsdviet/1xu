<h2>Listing Slideshows</h2>
<br>
<?php if ($slideshows): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Images</th>
			<th>Link</th>
			<th>Is active</th>
			<th>Is delete</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($slideshows as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->images; ?></td>
			<td><?php echo $item->link; ?></td>
			<td><?php echo $item->is_active; ?></td>
			<td><?php echo $item->is_delete; ?></td>
			<td>
				<?php echo Html::anchor('admin/slideshow/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/slideshow/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/slideshow/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Slideshows.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/slideshow/create', 'Add new Slideshow', array('class' => 'btn btn-success')); ?>

</p>
