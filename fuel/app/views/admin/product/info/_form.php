<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($product_info) ? $product_info->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Kind id', 'kind_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('kind_id', Input::post('kind_id', isset($product_info) ? $product_info->kind_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Kind id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Price', 'price', array('class'=>'control-label')); ?>

				<?php echo Form::input('price', Input::post('price', isset($product_info) ? $product_info->price : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Price')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Date', 'date', array('class'=>'control-label')); ?>

				<?php echo Form::input('date', Input::post('date', isset($product_info) ? $product_info->date : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Date')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Info', 'info', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('info', Input::post('info', isset($product_info) ? $product_info->info : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Info')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Images', 'images', array('class'=>'control-label')); ?>

				<?php echo Form::input('images', Input::post('images', isset($product_info) ? $product_info->images : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Images')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is active', 'is_active', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_active', Input::post('is_active', isset($product_info) ? $product_info->is_active : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is active')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is delete', 'is_delete', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_delete', Input::post('is_delete', isset($product_info) ? $product_info->is_delete : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is delete')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>