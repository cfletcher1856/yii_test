<?php
/* @var $this StatsController */
/* @var $model Stats */

$this->breadcrumbs=array(
	'Stats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Stats', 'url'=>array('index')),
	array('label'=>'Create Stats', 'url'=>array('create')),
	array('label'=>'Update Stats', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Stats', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stats', 'url'=>array('admin')),
);
?>

<h1>View Stats #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'player_id',
		'date',
		'wins',
		'losses',
	),
)); ?>
