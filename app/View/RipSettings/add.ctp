<div class="ripSettings form">
	
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Rip Settings'), array('controller' => 'ripSettings', 'action'=>'index'), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
		</div>
	</div>

<?php echo $this->Form->create('RipSetting');?>
	<fieldset>
	<legend><?php echo __('Add Rip Setting'); ?></legend>
	<?php
		echo $this->Form->input('setting_log_id');
		echo $this->Form->input('cyan');
		echo $this->Form->input('magenta');
		echo $this->Form->input('yellow');
		echo $this->Form->input('black');
		echo $this->Form->input('corrections_file');
		echo $this->Form->input('curve_file');
		echo $this->Form->input('resolution');
		echo $this->Form->input('ripped_in');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<?php $this->start('sidebar'); ?>	<div class="sidebar well">
		<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
								<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Rip Settings'), array('action' => 'index'), array('escape'=>false));?></li>
					<li class="nav-header"><?php echo "Setting Logs" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Setting Logs'), array('controller' => 'setting_logs', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus', 'black') .' '. __(' New Setting Log'), array('controller' => 'setting_logs', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), "/", array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>