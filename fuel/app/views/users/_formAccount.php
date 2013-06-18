<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Token', 'token', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('token', Input::post('token', isset($user) ? $user->token : ''), array('class' => 'span4', 'placeholder'=>'Token')); ?>

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
			<?php echo Form::label('First name', 'first_name', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('first_name', Input::post('first_name', isset($user) ? $user->first_name : ''), array('class' => 'span4', 'placeholder'=>'First name')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Last name', 'last_name', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('last_name', Input::post('last_name', isset($user) ? $user->last_name : ''), array('class' => 'span4', 'placeholder'=>'Last name')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>