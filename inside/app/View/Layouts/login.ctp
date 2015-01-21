<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        Test it !
    </title>
<?php

    echo $this->Html->meta('icon');

    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('bootstrap');
    echo $this->Html->css('sb-admin-2');
    echo $this->Html->css('plugins/metisMenu/metisMenu.min');
    echo $this->Html->css('font-awesome.min');
    echo $this->Html->css('login');

    echo $this->Html->script('jquery');
    echo $this->Html->script('bootstrap.min');
    echo $this->Html->script('sb-admin-2');
    echo $this->Html->script('plugins/metisMenu/metisMenu.min');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <?php  echo $this->Html->image('logo-transparent.png', array('width' => '20%','alt'=>'Brand')) ?>
            </a>
        </div>
    </div>
</nav>
<div class="container">

    <div class="row">
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>
    </div>
</div>

</body>

</html>
