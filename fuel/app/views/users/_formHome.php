<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
	<div class="control-group">
			<?php echo Form::label('Home city', 'home_city', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('home_city', Input::post('home_city', isset($user) ? $user->home_city : ''), array('class' => 'span4', 'placeholder'=>'Home city')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Home st', 'home_st', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('home_st', Input::post('home_st', isset($user) ? $user->home_st : ''), array('class' => 'span4', 'placeholder'=>'Home st')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Homecity id', 'homecity_id', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('homecity_id', Input::post('homecity_id', isset($user) ? $user->homecity_id : ''), array('class' => 'span4', 'placeholder'=>'Homecity id')); ?>

			</div>
		</div>

				<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>