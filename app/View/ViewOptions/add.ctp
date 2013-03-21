<div class="viewOptions form">
	
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List View Options'), array('controller' => 'viewOptions', 'action'=>'index'), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
		</div>
	</div>

<?php echo $this->Form->create('ViewOption');?>
	<fieldset>
	<legend><?php echo __('Add View Option'); ?></legend>
	<?php
		echo $this->Form->input('model');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<?php $this->start('sidebar'); ?>	<div class="sidebar well">
		<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
								<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List View Options'), array('action' => 'index'), array('escape'=>false));?></li>
					<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>