<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Bid kind', 'bid_kind', array('class'=>'control-label')); ?>

				<?php echo Form::input('bid_kind', Input::post('bid_kind', isset($bid_info) ? $bid_info->bid_kind : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Bid kind')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('User id', 'user_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('user_id', Input::post('user_id', isset($bid_info) ? $bid_info->user_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'User id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Bids', 'bids', array('class'=>'control-label')); ?>

				<?php echo Form::input('bids', Input::post('bids', isset($bid_info) ? $bid_info->bids : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Bids')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is active', 'is_active', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_active', Input::post('is_active', isset($bid_info) ? $bid_info->is_active : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is active')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is delete', 'is_delete', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_delete', Input::post('is_delete', isset($bid_info) ? $bid_info->is_delete : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is delete')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>