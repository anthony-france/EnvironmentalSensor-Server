<div class="outputSettings form">

<?php echo $this->Form->create('OutputSetting');?>
	<fieldset>
	<legend><?php echo __('Edit Output Setting'); ?></legend>
	
	<?php
		echo $this->Form->input('OutputSetting.setting_log_id', array('type'=>'hidden'));
	?>
		<fieldset id="fb6700">
			<legend><?php echo __('FB6700'); ?></legend>
			<div class="settings-panel">
				<div class="span4">
					<div class="row"> <?php echo $this->Form->input('fb6700_pretreatment', array('legend'=>false, 'before'=>'<h3>Pre-Treatment</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false));  ?> </div>
					<div class="row"> <?php echo $this->Form->input('fb6700_passes', array('legend'=>false, 'before'=>'<h3>Passes</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
				</div>
				<div class="span5 additional-settings">
						<?php	
							echo $this->Form->input('fb6700_curve', array('label'=>'Curve', 'type'=>'text')); 
							echo $this->Form->input('fb6700_heat', array('label'=>'Heat', 'type'=>'text'));
							echo $this->Form->input('fb6700_IRs', array('label'=>'IRs', 'type'=>'text'));
							echo $this->Form->input('fb6700_belt_speed', array('label'=>'Belt Speed', 'type'=>'text'));
							echo $this->Form->input('fb6700_carrage_height', array('label'=>'Carriage Height', 'type'=>'text')); 
						?>
				</div>
				<div class="row"><?php echo $this->Form->submit(); ?><?php echo $this->Form->input('Reset', array('div'=>'reset', 'label'=>false, 'type'=>'submit', "class"=>"clearForm")); ?></div>
			</div>
		</fieldset>
		<fieldset id="qs3200">
			<legend><?php echo __('QS3200'); ?></legend>
			<div class="settings-panel">
				<div class="span4">
					<div class="row"> <?php echo $this->Form->input('qs3200_device', array('legend'=>false, 'before'=>'<h3>Device</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
					<div class="row"> <?php echo $this->Form->input('qs3200_smoothing', array('legend'=>false, 'before'=>'<h3>Smoothing</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?>  </div>
					<div class="row"> <?php echo $this->Form->input('qs3200_curing', array('legend'=>false, 'before'=>'<h3>Curing</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?>  </div>
					<div class="row"> <?php echo $this->Form->input('qs3200_shutter', array('legend'=>false, 'before'=>'<h3>Shutter</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
					<div class="row"> <?php echo $this->Form->input('qs3200_layer_specifications', array('legend'=>false, 'before'=>'<h3>Layer Specs</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
				</div>
				<div class="span3 additional-settings"> 
					<div class="row"> <?php echo $this->Form->input('qs3200_material_bottom', array('legend'=>false, 'before'=>'<h3>Material Bottom</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
					<div class="row"> <?php echo $this->Form->input('qs3200_material_middle', array('legend'=>false, 'before'=>'<h3>Material Middle</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
					<div class="row"> <?php echo $this->Form->input('qs3200_material_top', array('legend'=>false, 'before'=>'<h3>Material Top</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false));  ?> </div>
				</div>
				<div class="row"><?php echo $this->Form->submit(); ?><?php echo $this->Form->input('Reset', array('div'=>'reset', 'label'=>false, 'type'=>'submit', "class"=>"clearForm")); ?></div>
			</div>
		</fieldset>
		<fieldset id="hp5300">
			<legend><?php echo __('HP5300'); ?></legend>
			<div class="settings-panel">			
				<div class="span3"> <?php echo $this->Form->input('hp5300_mode', array('legend'=>false, 'before'=>'<h3>Mode</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?></div>
				<div class="span3"> <?php echo $this->Form->input('hp5300_quality', array('legend'=>false, 'before'=>'<h3>Quality</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?></div>
				<div class="span3"> <?php echo $this->Form->input('hp5300_UV_curing', array('legend'=>false, 'before'=>'<h3>UV Curing</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?></div>
				<div class="row"><?php echo $this->Form->submit(); ?><?php echo $this->Form->input('Reset', array('div'=>'reset', 'label'=>false, 'type'=>'submit', "class"=>"clearForm")); ?></div>
			</div>
		</fieldset>
		<fieldset id="L25500">
			<legend><?php echo __('L25500'); ?></legend>
			<div class="settings-panel">
				<div class="span3"> <?php echo $this->Form->input('l25500_device', array('legend'=>false, 'before'=>'<h3>Device</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?></div>
				<div class="span3"> <?php echo $this->Form->input('l25500_resolution', array('legend'=>false, 'before'=>'<h3>Resolution</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?></div>
				<div class="span3"> <?php echo $this->Form->input('l25500_quality', array('legend'=>false, 'before'=>'<h3>Quality</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
				<div class="row"><?php echo $this->Form->submit(); ?><?php echo $this->Form->input('Reset', array('div'=>'reset', 'label'=>false, 'type'=>'submit', "class"=>"clearForm")); ?></div>
			</div>
		</fieldset>
		<fieldset id="tj8300">
			<legend><?php echo __('TJ8300'); ?></legend>
			<div class="settings-panel">
				<div class="span4">
					<div class="row"> <?php echo $this->Form->input('tj8300_resolution', array('legend'=>false, 'before'=>'<h3>Resolution</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
					<div class="row"> <?php echo $this->Form->input('tj8300_mode', array('legend'=>false, 'before'=>'<h3>Mode</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
					<div class="row"> <?php echo $this->Form->input('tj8300_setting', array('legend'=>false, 'before'=>'<h3>Setting</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
					<div class="row"> <?php echo $this->Form->input('tj8300_bridge_shift', array('legend'=>false, 'before'=>'<h3>Bridge Shift</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
				</div>
				<div class="span5 additional-settings">
					<div class="row"> <?php echo $this->Form->input('tj8300_double_strike', array('type'=>'checkbox')); ?> </div>
					<div class="row"> <?php echo $this->Form->input('tj8300_rotate', array('type'=>'checkbox')); ?> </div>
					<div class="row"> <?php echo $this->Form->input('tj8300_mirror', array('type'=>'checkbox')); ?> </div>
				</div>
				<div class="row"><?php echo $this->Form->submit(); ?><?php echo $this->Form->input('Reset', array('div'=>'reset', 'label'=>false, 'type'=>'submit', "class"=>"clearForm")); ?></div>
			</div>
		</fieldset>
		<fieldset id="z6100">
			<legend><?php echo __('Z6100'); ?></legend>
			<div class="settings-panel">
				<div class="span3"> <?php echo $this->Form->input('z6100_device', array('legend'=>false, 'before'=>'<h3>Device</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
				<div class="span3"> <?php echo $this->Form->input('z6100_quality', array('legend'=>false, 'before'=>'<h3>Quality</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
				<div class="row"><?php echo $this->Form->submit(); ?><?php echo $this->Form->input('Reset', array('div'=>'reset', 'label'=>false, 'type'=>'submit', "class"=>"clearForm")); ?></div>
			</div>
		</fieldset>
		<fieldset id="vu5330">
			<legend><?php echo __('5330'); ?></legend>
			<div class="settings-panel">
				<div class="span3"> <?php echo $this->Form->input('vu5330_quality', array('legend'=>false, 'before'=>'<h3>Quality</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
				<div class="span3"> <?php echo $this->Form->input('vu5330_smoothing', array('legend'=>false, 'before'=>'<h3>Smoothing</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
				<div class="span3"> <?php echo $this->Form->input('vu5330_speed', array('legend'=>false, 'before'=>'<h3>Speed</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
				<div class="row"><?php echo $this->Form->submit(); ?><?php echo $this->Form->input('Reset', array('div'=>'reset', 'label'=>false, 'type'=>'submit', "class"=>"clearForm")); ?></div>
			</div>
		</fieldset>	
		<fieldset id="vu3360">
			<legend><?php echo __('3360'); ?></legend>
			<div class="settings-panel">
				<div class="span3"> <?php echo $this->Form->input('vu3360_quality', array('legend'=>false, 'before'=>'<h3>Quality</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
				<div class="span3"> <?php echo $this->Form->input('vu3360_smoothing', array('legend'=>false, 'before'=>'<h3>Smoothing</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
				<div class="span3"> <?php echo $this->Form->input('vu3360_speed', array('legend'=>false, 'before'=>'<h3>Speed</h3><ul><li>', 'after' => '</li></ul>', 'separator'=>'</li><li>', 'label'=>false)); ?> </div>
				<div class="row"><?php echo $this->Form->submit(); ?><?php echo $this->Form->input('Reset', array('div'=>'reset', 'label'=>false, 'type'=>'submit', "class"=>"clearForm")); ?></div>
			</div>
		</fieldset>
	</fieldset>
<?php echo $this->Form->end();?>
</div>

<?php $this->start('sidebar'); ?>	<div class="sidebar well">
		<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
								<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete'), array('action' => 'delete', $this->Form->value('OutputSetting.id')), array('escape'=>false), __('Are you sure you want to delete # %s?', $this->Form->value('OutputSetting.id'))); ?></li>
								<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Output Settings'), array('action' => 'index'), array('escape'=>false));?></li>
					<li class="nav-header"><?php echo "Setting Logs" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Setting Logs'), array('controller' => 'setting_logs', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus', 'black') .' '. __(' New Setting Log'), array('controller' => 'setting_logs', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), "/", array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>