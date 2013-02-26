<?php
/* @var $this StatsController */
/* @var $model Stats */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stats-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'player_id'); ?>
		<?php echo $form->textField($model,'player_id'); ?>
		<?php echo $form->error($model,'player_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wins'); ?>
		<?php echo $form->textField($model,'wins'); ?>
		<?php echo $form->error($model,'wins'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'losses'); ?>
		<?php echo $form->textField($model,'losses'); ?>
		<?php echo $form->error($model,'losses'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->