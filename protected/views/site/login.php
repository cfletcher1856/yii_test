<?php
	/* @var $this SiteController */
	/* @var $model LoginForm */
	/* @var $form CActiveForm  */

	$this->pageTitle=Yii::app()->name . ' - Login';
	$this->page_header = "Login";
	$this->breadcrumbs=array(
		'Login',
	);

	$errors = $model->getErrors();
	$username_error = isset($errors['username']) ? ' error' : '';
	$password_error = isset($errors['password']) ? ' error' : '';
	CHtml::$errorContainerTag = 'span';
?>

<div class="row">
	<div class="span12">

		<?php if($errors): ?>
			<div class="alert alert-block alert-error fade in">
				<h4>Oops! There were errors processing your form.</h4>
				<p>
					Please check the fields below and ensure you have entered all required
					information.
				</p>
			</div>
		<?php endif; ?>

		<p>Please fill out the following form with your login credentials:</p>

		<div class="form">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'login-form',
			//'enableClientValidation'=>true,
			//'clientOptions'=>array(
			//	'validateOnSubmit'=>true,
			//),
		)); ?>

			<p class="note">Fields with <span class="required">*</span> are required.</p>

			<div class="control-group<?php echo $username_error; ?>">
				<?php echo $form->labelEx($model,'username', array('class' => 'control-label')); ?>
				<div class="controls">
					<?php echo $form->textField($model,'username'); ?>
					<?php echo $form->error($model,'username', array('class' => 'help-block')); ?>
				</div>
			</div>

			<div class="control-group<?php echo $password_error; ?>">
				<?php echo $form->labelEx($model,'password', array('class' => 'control-label')); ?>
				<div class="controls">
					<?php echo $form->passwordField($model,'password'); ?>
					<?php echo $form->error($model,'password', array('class' => 'help-block')); ?>
				</div>
			</div>

			<div class="control-group">
				<?php echo $form->checkBox($model,'rememberMe'); ?>
				<?php echo $form->label($model,'rememberMe', array('class' => 'checkbox inline')); ?>
			</div>

			<div class="control-group">
				<?php echo CHtml::submitButton('Login', array('class' => 'btn btn-primary')); ?>
			</div>

		<?php $this->endWidget(); ?>
		</div><!-- form -->
	</div>
</div>
