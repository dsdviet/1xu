<h2>Viewing #<?php echo $account_info_table->id; ?></h2>

<p>
	<strong>User id:</strong>
	<?php echo $account_info_table->user_id; ?></p>
<p>
	<strong>Card pay:</strong>
	<?php echo $account_info_table->card_pay; ?></p>
<p>
	<strong>Card number:</strong>
	<?php echo $account_info_table->card_number; ?></p>
<p>
	<strong>Card security:</strong>
	<?php echo $account_info_table->card_security; ?></p>
<p>
	<strong>Date expiration:</strong>
	<?php echo $account_info_table->date_expiration; ?></p>
<p>
	<strong>Is active:</strong>
	<?php echo $account_info_table->is_active; ?></p>
<p>
	<strong>Is delete:</strong>
	<?php echo $account_info_table->is_delete; ?></p>

<?php echo Html::anchor('admin/account/info/table/edit/'.$account_info_table->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/account/info/table', 'Back'); ?>