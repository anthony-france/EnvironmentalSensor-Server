<div class="logs form">
	
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Logs'), array('controller' => 'logs', 'action'=>'index'), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
		</div>
	</div>

<?php echo $this->Form->create('Log');?>
	<fieldset>
	<legend><?php echo __('Add Log'); ?></legend>
	<?php
		echo $this->TwitterBootstrap->input('order_no');
		echo $this->TwitterBootstrap->input('job_no');
		echo $this->TwitterBootstrap->input('client_id');
		echo $this->TwitterBootstrap->input('start_time');
		echo $this->TwitterBootstrap->input('end_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<?php $this->start('sidebar'); ?>	<div class="sidebar well">
		<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
								<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Logs'), array('action' => 'index'), array('escape'=>false));?></li>
					<li class="nav-header"><?php echo "Clients" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Clients'), array('controller' => 'clients', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus', 'black') .' '. __(' New Client'), array('controller' => 'clients', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Comments" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Comments'), array('controller' => 'comments', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus', 'black') .' '. __(' New Comment'), array('controller' => 'comments', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>