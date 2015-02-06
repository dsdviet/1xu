<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('User id', 'user_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('user_id', Input::post('user_id', isset($account_info_table) ? $account_info_table->user_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'User id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Card pay', 'card_pay', array('class'=>'control-label')); ?>

				<?php echo Form::input('card_pay', Input::post('card_pay', isset($account_info_table) ? $account_info_table->card_pay : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Card pay')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Card number', 'card_number', array('class'=>'control-label')); ?>

				<?php echo Form::input('card_number', Input::post('card_number', isset($account_info_table) ? $account_info_table->card_number : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Card number')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Card security', 'card_security', array('class'=>'control-label')); ?>

				<?php echo Form::input('card_security', Input::post('card_security', isset($account_info_table) ? $account_info_table->card_security : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Card security')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Date expiration', 'date_expiration', array('class'=>'control-label')); ?>

				<?php echo Form::input('date_expiration', Input::post('date_expiration', isset($account_info_table) ? $account_info_table->date_expiration : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Date expiration')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is active', 'is_active', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_active', Input::post('is_active', isset($account_info_table) ? $account_info_table->is_active : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is active')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is delete', 'is_delete', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_delete', Input::post('is_delete', isset($account_info_table) ? $account_info_table->is_delete : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is delete')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>