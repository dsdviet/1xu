<h2>Viewing <span class='muted'>#<?php echo $customer->id; ?></span></h2>

<p>
	<strong>Username:</strong>
	<?php echo $customer->username; ?></p>
<p>
	<strong>Password:</strong>
	<?php echo $customer->password; ?></p>
<p>
	<strong>Firstname:</strong>
	<?php echo $customer->firstname; ?></p>
<p>
	<strong>Lastname:</strong>
	<?php echo $customer->lastname; ?></p>
<p>
	<strong>Birthday:</strong>
	<?php echo $customer->birthday; ?></p>
<p>
	<strong>Phone:</strong>
	<?php echo $customer->phone; ?></p>
<p>
	<strong>Address:</strong>
	<?php echo $customer->address; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $customer->email; ?></p>
<p>
	<strong>Is active:</strong>
	<?php echo $customer->is_active; ?></p>
<p>
	<strong>Is delete:</strong>
	<?php echo $customer->is_delete; ?></p>

<?php echo Html::anchor('customers/edit/'.$customer->id, 'Edit'); ?> |
<?php echo Html::anchor('customers', 'Back'); ?>