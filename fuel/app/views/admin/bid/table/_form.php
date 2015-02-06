<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Bid name', 'bid_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('bid_name', Input::post('bid_name', isset($bid_table) ? $bid_table->bid_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Bid name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Bid info', 'bid_info', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('bid_info', Input::post('bid_info', isset($bid_table) ? $bid_table->bid_info : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Bid info')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is active', 'is_active', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_active', Input::post('is_active', isset($bid_table) ? $bid_table->is_active : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is active')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is delete', 'is_delete', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_delete', Input::post('is_delete', isset($bid_table) ? $bid_table->is_delete : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is delete')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>