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
			<?php echo Form::label('Garage city', 'garage_city', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('garage_city', Input::post('garage_city', isset($user) ? $user->garage_city : ''), array('class' => 'span4', 'placeholder'=>'Garage city')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Garage st', 'garage_st', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('garage_st', Input::post('garage_st', isset($user) ? $user->garage_st : ''), array('class' => 'span4', 'placeholder'=>'Garage st')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Garagecity id', 'garagecity_id', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('garagecity_id', Input::post('garagecity_id', isset($user) ? $user->garagecity_id : ''), array('class' => 'span4', 'placeholder'=>'Garagecity id')); ?>

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