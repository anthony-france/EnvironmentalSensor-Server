<div class="clients form">
	<?php echo $this->Form->create('Client');?>
		<fieldset>
		<legend><?php echo __('Add Client'); ?></legend>
		<?php
			echo $this->Form->input('name');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit'));?>
</div>

<?php $this->start('sidebar'); ?>	<div class="sidebar well">
		<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Clients'), array('action' => 'index'), array('escape'=>false));?></li>
		<li class="nav-header"><?php echo "Setting Logs" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Setting Logs'), array('controller' => 'setting_logs', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus', 'black') .' '. __(' New Setting Log'), array('controller' => 'setting_logs', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="divider"></li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), "/", array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>