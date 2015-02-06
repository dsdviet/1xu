<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('User id', 'user_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('user_id', Input::post('user_id', isset($bid_session) ? $bid_session->user_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'User id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Product id', 'product_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('product_id', Input::post('product_id', isset($bid_session) ? $bid_session->product_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Product id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Lasted bid', 'lasted_bid', array('class'=>'control-label')); ?>

				<?php echo Form::input('lasted_bid', Input::post('lasted_bid', isset($bid_session) ? $bid_session->lasted_bid : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Lasted bid')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is active', 'is_active', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_active', Input::post('is_active', isset($bid_session) ? $bid_session->is_active : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is active')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is delete', 'is_delete', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_delete', Input::post('is_delete', isset($bid_session) ? $bid_session->is_delete : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is delete')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>