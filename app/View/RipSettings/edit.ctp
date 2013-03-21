<div class="ripSettings form">

<?php echo $this->Form->create('RipSetting', array('type' => 'file'));?>
	<fieldset>
	<legend><?php echo __('Edit Rip Setting'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('setting_log_id', array('type'=>'hidden')); ?>
		<div class="row">
			<div class="span3">
				<?php 
					echo $this->Form->input('cyan', array('type'=>'text')); 
					echo $this->Form->input('magenta', array('type'=>'text'));
					echo $this->Form->input('yellow', array('type'=>'text'));
					echo $this->Form->input('black', array('type'=>'text')); 
				?>
			</div>
			<div class="span3">
				<?php 
					echo $this->Form->input('resolution', array('type'=>'text'));
					echo $this->Form->input('ripped_in'); 
					echo $this->Form->input('corrections_file', array('type'=>'file'));
					echo $this->Form->input('corrections_file_dir', array('type' => 'hidden')); 
					echo $this->Form->input('curve_file', array('type'=>'file'));
					echo $this->Form->input('curve_file_dir', array('type' => 'hidden')); 
				?>
			</div>
		</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<?php $this->start('sidebar'); ?>	<div class="sidebar well">
		<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
		<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete'), array('action' => 'delete', $this->Form->value('RipSetting.id')), array('escape'=>false), __('Are you sure you want to delete # %s?', $this->Form->value('RipSetting.id'))); ?></li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Rip Settings'), array('action' => 'index'), array('escape'=>false));?></li>
		<li class="nav-header"><?php echo "Setting Logs" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Setting Logs'), array('controller' => 'setting_logs', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus', 'black') .' '. __(' New Setting Log'), array('controller' => 'setting_logs', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), "/", array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>