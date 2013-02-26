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

    <link rel="shortcut icon" href="{% static "images/favicon.ico" %}">
</head>
<body>

    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a href="<?php echo Yii::app()->getHomeUrl(); ?>">
                    Test
                </a>

                <ul class="nav">
                    <li><a href="#">One</a></li>
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

            <?php if($this->breadcrumbs): ?>
            <div class="row">
                <div id="breadcrumbs" class="span12">
                    {% block breadcrumbs %}{% endblock %}
                </div>
            </div>
            <?php endif; ?>

            <div class="row">
                <div class="span12">
                    <?php echo $content ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
