<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
<div class="control-group">
			<?php echo Form::label('Ownshome', 'ownshome', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('ownshome', Input::post('ownshome', isset($user) ? $user->ownshome : ''), array('class' => 'span4', 'placeholder'=>'Ownshome')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Hasdriverslic', 'hasdriverslic', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('hasdriverslic', Input::post('hasdriverslic', isset($user) ? $user->hasdriverslic : ''), array('class' => 'span4', 'placeholder'=>'Hasdriverslic')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Hasautomobile', 'hasautomobile', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('hasautomobile', Input::post('hasautomobile', isset($user) ? $user->hasautomobile : ''), array('class' => 'span4', 'placeholder'=>'Hasautomobile')); ?>

			</div>
		</div>
				<div class="control-group">
			<?php echo Form::label('Hasbiz', 'hasbiz', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('hasbiz', Input::post('hasbiz', isset($user) ? $user->hasbiz : ''), array('class' => 'span4', 'placeholder'=>'Hasbiz')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Hasbizlic', 'hasbizlic', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('hasbizlic', Input::post('hasbizlic', isset($user) ? $user->hasbizlic : ''), array('class' => 'span4', 'placeholder'=>'Hasbizlic')); ?>

			</div>
		</div>

				<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>






		