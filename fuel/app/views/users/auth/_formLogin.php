<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		
		<div class="control-group">
			<?php echo Form::label('Email', 'username', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'span4', 'placeholder'=>'Email')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Password', 'password', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('password', Input::post('password', isset($user) ? $user->password : ''), array('class' => 'span4', 'placeholder'=>'Password')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('class' => 'span4', 'placeholder'=>'Email')); ?>

			</div>
		</div>

		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>