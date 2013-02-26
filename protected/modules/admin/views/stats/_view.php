<?php
/* @var $this StatsController */
/* @var $data Stats */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('player_id')); ?>:</b>
	<?php echo CHtml::encode($data->player_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wins')); ?>:</b>
	<?php echo CHtml::encode($data->wins); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('losses')); ?>:</b>
	<?php echo CHtml::encode($data->losses); ?>
	<br />


</div>