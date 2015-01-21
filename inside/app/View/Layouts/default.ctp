<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Inside the TEDx !
	</title>
	<?php
		echo $this->Html->meta('icon');

        echo $this->Html->meta(
            'favicon.ico',
            '/favicon.ico',
            array('type' => 'icon')
        );

		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('sb-admin-2');
		echo $this->Html->css('plugins/metisMenu/metisMenu.min');
		echo $this->Html->css('plugins/timeline');
		echo $this->Html->css('plugins/morris');
		echo $this->Html->css('font-awesome.min');

		echo $this->Html->script('jquery');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('sb-admin-2');
		echo $this->Html->script('plugins/metisMenu/metisMenu.min');
		echo $this->Html->script('plugins/morris/raphael.min');
		echo $this->Html->script('plugins/morris/morris.min');
		echo $this->Html->script('plugins/morris/morris-data');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top navbar-test" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <?php
            $image = $this->Html->image('TEDxUB.png', array('width' => '100%','alt'=>'Brand'));
            echo $this->Html->link($image, array('controller' => 'applications','action' => 'index'),array('class' => 'navbar-brand','escape' => false)); ?>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i><?php echo $this->Session->read('Auth.User.firstname').' '.$this->Session->read('Auth.User.lastname') ?>
                <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <?php
                        $font = '<i class="fa fa-sign-out fa-fw"></i> Logout';
                        echo $this->Html->link($font, array('controller' => 'users','action' => 'logout'),array('class' => '', 'escape' => false));
                    ?>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a class="active" href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">

                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>
        </div>
        <div id="footer">

        </div>
	</div>
</body>
</html>
