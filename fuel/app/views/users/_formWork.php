<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
<div class="control-group">
			<?php echo Form::label('Work city', 'work_city', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('work_city', Input::post('work_city', isset($user) ? $user->work_city : ''), array('class' => 'span4', 'placeholder'=>'Work city')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Work st', 'work_st', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('work_st', Input::post('work_st', isset($user) ? $user->work_st : ''), array('class' => 'span4', 'placeholder'=>'Work st')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Workcity id', 'workcity_id', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('workcity_id', Input::post('workcity_id', isset($user) ? $user->workcity_id : ''), array('class' => 'span4', 'placeholder'=>'Workcity id')); ?>

			</div>
		</div>
<div class="control-group">
			<?php echo Form::label('Work zip', 'work_zip', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('work_zip', Input::post('work_zip', isset($user) ? $user->work_zip : ''), array('class' => 'span4', 'placeholder'=>'Work zip')); ?>

			</div>
		</div>
				<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>






		