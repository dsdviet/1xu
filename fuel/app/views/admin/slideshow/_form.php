<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Title', 'title', array('class'=>'control-label')); ?>

				<?php echo Form::input('title', Input::post('title', isset($slideshow) ? $slideshow->title : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Title')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Images', 'images', array('class'=>'control-label')); ?>

				<?php echo Form::input('images', Input::post('images', isset($slideshow) ? $slideshow->images : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Images')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Link', 'link', array('class'=>'control-label')); ?>

				<?php echo Form::input('link', Input::post('link', isset($slideshow) ? $slideshow->link : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Link')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is active', 'is_active', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_active', Input::post('is_active', isset($slideshow) ? $slideshow->is_active : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is active')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is delete', 'is_delete', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_delete', Input::post('is_delete', isset($slideshow) ? $slideshow->is_delete : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is delete')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>