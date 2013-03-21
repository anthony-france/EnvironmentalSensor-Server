<div class="settingLogs form">


<?php echo $this->Form->create('SettingLog');?>
	<fieldset>
	<legend><?php echo __('Add Setting Log'); ?></legend>
	<div class="row">
		<div class="span4">
			<?php echo $this->Form->input('order_no'); ?>
		</div>
		<div class="span4">
			<?php echo $this->Form->input('job_no'); ?>		
		</div>
	</div>
	<div class="row">
		<div class="span3">
			<?php echo $this->Form->input('client_id', array('empty' => 'Enter New')); ?>
		</div>
		<div class="span5">
			<?php echo $this->Form->input('client_id_insert', array('label' => "New Client")); ?>
		</div>
	</div>	
	<div class="row">
		<div class="span3">
			<?php echo $this->Form->input('start_time', array('type' => 'text', 'class'=>'advtimepicker')); ?>
		</div>
		<div class="span3">
			<?php echo $this->Form->input('end_time', array('type' => 'text', 'class'=>'advtimepicker')); ?>
		</div>
	</div>	

	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<?php $this->start('sidebar'); ?>	<div class="sidebar well">
		<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
								<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Setting Logs'), array('action' => 'index'), array('escape'=>false));?></li>
					<li class="nav-header"><?php echo "Clients" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Clients'), array('controller' => 'clients', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus', 'black') .' '. __(' New Client'), array('controller' => 'clients', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), "/", array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>