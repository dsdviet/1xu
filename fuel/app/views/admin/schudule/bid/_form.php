<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Product bids id', 'product_bids_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('product_bids_id', Input::post('product_bids_id', isset($schudule_bid) ? $schudule_bid->product_bids_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Product bids id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Time begin', 'time_begin', array('class'=>'control-label')); ?>

				<?php echo Form::input('time_begin', Input::post('time_begin', isset($schudule_bid) ? $schudule_bid->time_begin : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Time begin')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Time end', 'time_end', array('class'=>'control-label')); ?>

				<?php echo Form::input('time_end', Input::post('time_end', isset($schudule_bid) ? $schudule_bid->time_end : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Time end')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('User create', 'user_create', array('class'=>'control-label')); ?>

				<?php echo Form::input('user_create', Input::post('user_create', isset($schudule_bid) ? $schudule_bid->user_create : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'User create')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Time extra', 'time_extra', array('class'=>'control-label')); ?>

				<?php echo Form::input('time_extra', Input::post('time_extra', isset($schudule_bid) ? $schudule_bid->time_extra : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Time extra')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is active', 'is_active', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_active', Input::post('is_active', isset($schudule_bid) ? $schudule_bid->is_active : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is active')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is delete', 'is_delete', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_delete', Input::post('is_delete', isset($schudule_bid) ? $schudule_bid->is_delete : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is delete')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>