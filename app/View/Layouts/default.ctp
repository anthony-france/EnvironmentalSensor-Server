<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = "Settings Repository";
?>

<!DOCTYPE html> 

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('jquery.jqplot');
		echo $this->Html->css('jquery.timepicker');
		echo $this->Html->css('smoothness/jquery-ui-1.9.0.custom');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->css('cake.generic');
		

		echo $this->Html->script('jquery-1.8.2.min');
		echo $this->Html->script('jquery-ui-1.9.0.custom.min');
		echo $this->Html->script('jquery.timepicker');
		echo $this->Html->script('jquery.jqplot');
		echo $this->Html->script('jqplot_plugins/jqplot.json2.min');
		echo $this->Html->script('jqplot_plugins/jqplot.dateAxisRenderer.min');
		echo $this->Html->script('jqplot_plugins/jqplot.pointLabels.min');
		echo $this->Html->script('jquery.timepicker');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script('core');
		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?> 
	<?php
		if (is_file(WWW_ROOT . 'css' . DS . $this->params['controller'] . '.css')) {
			echo $this->Html->css($this->params['controller']);
		}
		if (is_file(WWW_ROOT . 'css' . DS . $this->params['controller'] . DS . $this->params['action'] . '.css')) {
			echo $this->Html->css($this->params['controller'] . '/' . $this->params['action']);
		}
		if (is_file(WWW_ROOT . 'js' . DS . $this->params['controller'] . '.js')) {
			echo $this->Html->script($this->params['controller']);
		}
		if (is_file(WWW_ROOT . 'js' . DS . $this->params['controller'] . DS . $this->params['action'] . '.js')) {
			echo $this->Html->script($this->params['controller'] . '/' . $this->params['action']);
		}
	?>
</head>
<body>
	<div id="flash-area">
		<?php echo $this->TwitterBootstrap->flashes(array('closable'=>true)); ?>
	</div>
	<div id="container" class="container-fluid">
		<div class="row-fluid">
			<div class="span12">

				<div id="header">
					<h1><?php echo $this->Html->link($cakeDescription, '/'); ?></h1>
				</div>
				<div class="wrapper">
					<div id="content">
						<div class="row-fluid">
							<div class="span3">
								<?php echo $this->fetch('sidebar'); ?>&nbsp;
							</div>
							<div class="span9">
								<?php echo $this->fetch('content'); ?>&nbsp;
							</div>
						</div>
					</div>
					<div class="push"></div>
				</div>
				<footer>
				</footer>
			</div>
		</div>
	</div>
	<div id="dialog-box"></div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
