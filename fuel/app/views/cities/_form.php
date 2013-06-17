<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Zipcode', 'zipcode', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('zipcode', Input::post('zipcode', isset($city) ? $city->zipcode : ''), array('class' => 'span4', 'placeholder'=>'Zipcode')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('State', 'state', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('state', Input::post('state', isset($city) ? $city->state : ''), array('class' => 'span4', 'placeholder'=>'State')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('City', 'city', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('city', Input::post('city', isset($city) ? $city->city : ''), array('class' => 'span4', 'placeholder'=>'City')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('County', 'county', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('county', Input::post('county', isset($city) ? $city->county : ''), array('class' => 'span4', 'placeholder'=>'County')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Latitude', 'latitude', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('latitude', Input::post('latitude', isset($city) ? $city->latitude : ''), array('class' => 'span4', 'placeholder'=>'Latitude')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Longitude', 'longitude', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('longitude', Input::post('longitude', isset($city) ? $city->longitude : ''), array('class' => 'span4', 'placeholder'=>'Longitude')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>