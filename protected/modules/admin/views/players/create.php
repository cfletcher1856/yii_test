<?php
    /* @var $this PlayersController */
    /* @var $model Players */

    $this->breadcrumbs=array(
    	'Players'=>array('index'),
    	'Create',
    );

    $this->menu=array(
    	array('label'=>'List Players', 'url'=>array('index')),
    	array('label'=>'Manage Players', 'url'=>array('admin')),
    );

    $this->page_header = 'Create Player';
    CHtml::$errorContainerTag = 'span';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
