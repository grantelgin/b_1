<?php echo Form::open(array("class"=>"form-horizontal")); ?>

    <div style="float:left; margin:0px 5px 0px 10px;">
        <table>
            <tr>
                <td><?php echo $user->home_city; ?></td>

                <td><?php echo $user->home_st; ?></td>

                <td><?php echo $user->homecity_id; ?></td>
            </tr>

            <tr>
                <td><?php echo $user->work_city; ?></td>

                <td><?php echo $user->work_st; ?></td>

                <td><?php echo $user->workcity_id; ?></td>
            </tr>
        </table>
    </div>

    <div style="float:left; margin-left: 30px;">
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
                    <?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>
                </div>
            </div>
        </fieldset>
    </div>
    <?php echo Form::close(); ?>

