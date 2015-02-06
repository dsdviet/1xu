<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Bid kind', 'bid_kind', array('class'=>'control-label')); ?>

				<?php echo Form::input('bid_kind', Input::post('bid_kind', isset($bid_convert) ? $bid_convert->bid_kind : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Bid kind')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Price', 'price', array('class'=>'control-label')); ?>

				<?php echo Form::input('price', Input::post('price', isset($bid_convert) ? $bid_convert->price : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Price')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is active', 'is_active', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_active', Input::post('is_active', isset($bid_convert) ? $bid_convert->is_active : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is active')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is delete', 'is_delete', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_delete', Input::post('is_delete', isset($bid_convert) ? $bid_convert->is_delete : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is delete')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>