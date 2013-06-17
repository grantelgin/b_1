<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Regulator id', 'regulator_id', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('regulator_id', Input::post('regulator_id', isset($complianceItem) ? $complianceItem->regulator_id : ''), array('class' => 'span4', 'placeholder'=>'Regulator id')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Ciname', 'ciname', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('ciname', Input::post('ciname', isset($complianceItem) ? $complianceItem->ciname : ''), array('class' => 'span4', 'placeholder'=>'Ciname')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Cidesc', 'cidesc', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('cidesc', Input::post('cidesc', isset($complianceItem) ? $complianceItem->cidesc : ''), array('class' => 'span4', 'placeholder'=>'Cidesc')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Cicar', 'cicar', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('cicar', Input::post('cicar', isset($complianceItem) ? $complianceItem->cicar : ''), array('class' => 'span4', 'placeholder'=>'Cicar')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Cihome', 'cihome', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('cihome', Input::post('cihome', isset($complianceItem) ? $complianceItem->cihome : ''), array('class' => 'span4', 'placeholder'=>'Cihome')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Cibusiness', 'cibusiness', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('cibusiness', Input::post('cibusiness', isset($complianceItem) ? $complianceItem->cibusiness : ''), array('class' => 'span4', 'placeholder'=>'Cibusiness')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Cidriverslic', 'cidriverslic', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('cidriverslic', Input::post('cidriverslic', isset($complianceItem) ? $complianceItem->cidriverslic : ''), array('class' => 'span4', 'placeholder'=>'Cidriverslic')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Cibizlic', 'cibizlic', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('cibizlic', Input::post('cibizlic', isset($complianceItem) ? $complianceItem->cibizlic : ''), array('class' => 'span4', 'placeholder'=>'Cibizlic')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Cifreq', 'cifreq', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('cifreq', Input::post('cifreq', isset($complianceItem) ? $complianceItem->cifreq : ''), array('class' => 'span4', 'placeholder'=>'Cifreq')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Cifee', 'cifee', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('cifee', Input::post('cifee', isset($complianceItem) ? $complianceItem->cifee : ''), array('class' => 'span4', 'placeholder'=>'Cifee')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Cipenaltyfee', 'cipenaltyfee', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('cipenaltyfee', Input::post('cipenaltyfee', isset($complianceItem) ? $complianceItem->cipenaltyfee : ''), array('class' => 'span4', 'placeholder'=>'Cipenaltyfee')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Cipenaltydesc', 'cipenaltydesc', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('cipenaltydesc', Input::post('cipenaltydesc', isset($complianceItem) ? $complianceItem->cipenaltydesc : ''), array('class' => 'span4', 'placeholder'=>'Cipenaltydesc')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>