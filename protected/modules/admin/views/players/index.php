<?php
    /* @var $this PlayersController */
    /* @var $dataProvider CActiveDataProvider */

    $this->breadcrumbs=array(
    	'Players',
    );

    $this->menu=array(
    	array('label'=>'Create Players', 'url'=>array('create')),
    	array('label'=>'Manage Players', 'url'=>array('admin')),
    );
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'players-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        array(
            'type' => 'raw',
            'name' => 'name',
            'value' => '$data->full_name()',
        ),
        array(
            'type' => 'raw',
            'name' => 'email',
            'value' => '$data->email',
        ),
        array(
            'type' => 'raw',
            'name' => 'phone',
            'value' => '$data->phone',
        ),
        array(
            'class'=>'CButtonColumn',
            'template' => '{update} {delete}',
        ),
    ),
)); ?>
