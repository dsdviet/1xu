<h2>Viewing <?php echo $user->username; ?></h2>

<p>
	<strong>Username:</strong>
	<?php echo $user->username; ?></p>

<p>
	<strong>Role:</strong>
	<?php if($user->group==100) echo'Super Admin'; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $user->email; ?></p>
<p>
	<strong>Phone:</strong>
	<?php echo $user->phone; ?></p>

<?php echo Html::anchor('admin/users/edit/'.$user->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/users', 'Back'); ?>