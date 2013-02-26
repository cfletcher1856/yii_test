<?php
	/* @var $this PlayersController */
	/* @var $model Players */
	/* @var $form CActiveForm */
	$errors = $model->getErrors();
	$fname_error = isset($errors['f_name']) ? ' error' : '';
	$lname_error = isset($errors['l_name']) ? ' error' : '';
	$email_error = isset($errors['email']) ? ' error' : '';
?>


<?php if($errors): ?>
	<div class="alert alert-block alert-error fade in">
		<h4>Oops! There were errors processing your form.</h4>
		<p>
			Please check the fields below and ensure you have entered all required
			information.
		</p>
	</div>
<?php endif; ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'players-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="control-group<?php echo $fname_error; ?>">
		<?php echo $form->labelEx($model,'f_name', array('class' => 'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'f_name',array('size'=>60,'maxlength'=>120)); ?>
			<?php echo $form->error($model,'f_name', array('class' => 'help-inline')); ?>
		</div>
	</div>

	<div class="control-group<?php echo $lname_error; ?>">
		<?php echo $form->labelEx($model,'l_name', array('class' => 'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'l_name',array('size'=>60,'maxlength'=>120)); ?>
			<?php echo $form->error($model,'l_name', array('class' => 'help-inline')); ?>
		</div>
	</div>

	<div class="control-group<?php echo $email_error; ?>">
		<?php echo $form->labelEx($model,'email', array('class' => 'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>120)); ?>
			<?php echo $form->error($model,'email', array('class' => 'help-inline')); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'phone', array('class' => 'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'phone',array('size'=>15,'maxlength'=>15)); ?>
			<?php echo $form->error($model,'phone'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
