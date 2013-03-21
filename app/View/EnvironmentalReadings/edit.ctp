<div class="environmentalReadings form">
	
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->TwitterBootstrap->button_form($this->TwitterBootstrap->icon('trash', 'white') .' '. __('Delete Environmental Reading'), array('action' => 'delete', $this->request->data['EnvironmentalReading']['id']), array('style'=>'danger', 'class'=>'pull-right', 'escape'=>false), __('Are you sure you want to delete # %s?', $this->request->data['EnvironmentalReading']['id'])); ?> 
	<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('info-sign', 'black') .' '. __('View Environmental Reading'), array('action' => 'view', $this->request->data['EnvironmentalReading']['id']), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
		</div>
	</div>

<?php echo $this->Form->create('EnvironmentalReading');?>
	<fieldset>
	<legend><?php echo __('Edit Environmental Reading'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tempurature');
		echo $this->Form->input('humidity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<?php $this->start('sidebar'); ?>	<div class="sidebar well">
		<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
								<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete'), array('action' => 'delete', $this->Form->value('EnvironmentalReading.id')), array('escape'=>false), __('Are you sure you want to delete # %s?', $this->Form->value('EnvironmentalReading.id'))); ?></li>
								<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Environmental Readings'), array('action' => 'index'), array('escape'=>false));?></li>
					<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), "/", array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>