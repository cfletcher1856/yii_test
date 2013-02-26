<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title><?php echo Yii::app()->name ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php
        if(Yii::app()->theme->name == 'bootstrapped'){
            Yii::app()->less->register();
        }
    ?>
</head>
<body>

    <div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container">
                <ul class="nav">
                    <li><?php echo CHtml::link('Players', array('//admin/players')); ?></li>
                    <li><?php echo CHtml::link('Two', Yii::app()->homeUrl); ?></li>
                    <li><?php echo CHtml::link('Three', Yii::app()->homeUrl); ?></li>
                </ul>
                <ul class="nav pull-right">
                    <li class="divider-vertical"></li>
                    <li class="pull-right"><?php echo CHtml::link('Logout', array('//site/logout')); ?></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <?php if($this->page_header): ?>
            <div class="page-header">
                <h1><?php echo $this->page_header; ?>
                    <?php if($this->sub_header): ?>
                        <small><?php echo $this->sub_header; ?></small>
                    <?php endif; ?>
                </h1>
            </div>
            <?php endif; ?>


            <div class="row">
                <div id="breadcrumbs" class="span12">
                    <?php
                        $this->widget('Breadcrumbs', array(
                            'links'=>$this->breadcrumbs,
                        ));
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="span3">
                    <div id="sidebar">
                    <?php
                        $this->beginWidget('zii.widgets.CPortlet', array(
                            'title'=>'Actions',
                        ));

                        $this->widget('zii.widgets.CMenu', array(
                            'items'=>$this->menu,
                            'htmlOptions'=>array('class'=>'operations'),
                        ));

                        $this->endWidget();
                    ?>
                    </div><!-- sidebar -->
                </div>

                <div class="span9">
                    <div id="content">
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/1.0.1/lodash.min.js"></script>
    <script type="text/javascript">
        // Tell jQuery to never cache ajax requests
        $.ajaxSetup({ cache: false });
    </script>

</body>
</html>
