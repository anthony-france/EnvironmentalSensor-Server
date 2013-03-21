<div class="settingLogs search form">
	
<?php echo $this->Form->create('Search'); ?>
	<fieldset>
	<legend><?php echo __('Search'); ?></legend>
		<div class="row">
			<div class="span2">
				<?php echo $this->Form->input('order_no'); ?>
			</div>
			<div class="span2">
				<?php echo $this->Form->input('job_no'); ?>		
			</div>
			<div class="span2">
				<?php echo $this->Form->input('client_id', array('empty' => ' ')); ?>
			</div>
			<div class="span2">
				<?php echo $this->Form->input('start_time', array('type' => 'text', 'class'=>'advtimepicker')); ?>
			</div>
			<div class="span2">
				<?php echo $this->Form->input('end_time', array('type' => 'text', 'class'=>'advtimepicker')); ?>
			</div>
			<div class="span2">
				<?php echo $this->Form->submit('Search'); ?>
			</div>
		</div>
	</fieldset>
<?php echo $this->Form->end();?>
</div>