<div class="clients form">
	
<?php echo $this->Form->create('Client');?>
	<fieldset>
	<legend><?php echo __('Edit Client'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<?php $this->start('sidebar'); ?>	<div class="sidebar well">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete'), array('action' => 'delete', $this->Form->value('Client.id')), array('escape'=>false), __('Are you sure you want to delete # %s?', $this->Form->value('Client.id'))); ?></li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Clients'), array('action' => 'index'), array('escape'=>false));?></li>
			<li class="nav-header"><?php echo "Setting Logs" ?> </li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Setting Logs'), array('controller' => 'setting_logs', 'action' => 'index'), array('escape'=>false)); ?> </li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus', 'black') .' '. __(' New Setting Log'), array('controller' => 'setting_logs', 'action' => 'add'), array('escape'=>false, 'class'=>'loadDialog')); ?> </li>
			<li class="divider"></li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), "/", array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>