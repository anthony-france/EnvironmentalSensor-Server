<div class="outputSettings view">
	
	<div class="row row-fluid">
		<div class="span12"><h2><?php echo __('Output Setting');?></h2><?php if (!empty($outputSetting['Tag'])) echo $this->element('tags', array('tags' => $outputSetting['Tag'])); ?></div>
	</div>
	<div class="row row-fluid">
		<div class="span12">
			<dl>
						<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Setting Log'); ?></dt>
		<dd>
			<?php echo $this->Html->link($outputSetting['SettingLog']['id'], array('controller' => 'setting_logs', 'action' => 'view', $outputSetting['SettingLog']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fb6700 Pretreatment'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['fb6700_pretreatment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fb6700 Passes'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['fb6700_passes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fb6700 Curve'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['fb6700_curve']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fb6700 Heat'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['fb6700_heat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fb6700 IRs'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['fb6700_IRs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fb6700 Belt Speed'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['fb6700_belt_speed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fb6700 Carrage Height'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['fb6700_carrage_height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hp5300 Mode'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['hp5300_mode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hp5300 Quality'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['hp5300_quality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hp5300 UV Curing'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['hp5300_UV_curing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('L25500 Device'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['l25500_device']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('L25500 Resolution'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['l25500_resolution']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('L25500 Quality'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['l25500_quality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tj8300 Resolution'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['tj8300_resolution']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tj8300 Mode'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['tj8300_mode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tj8300 Setting'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['tj8300_setting']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tj8300 Bridge Shift'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['tj8300_bridge_shift']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tj8300 Double Strike'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['tj8300_double_strike']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tj8300 Rotate'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['tj8300_rotate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tj8300 Mirror'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['tj8300_mirror']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Z6100 Device'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['z6100_device']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Z6100 Quality'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['z6100_quality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qs3200 Device'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['qs3200_device']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qs3200 Smoothing'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['qs3200_smoothing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qs3200 Curing'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['qs3200_curing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qs3200 Shutter'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['qs3200_shutter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qs3200 Layer Specifications'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['qs3200_layer_specifications']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qs3200 Material Bottom'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['qs3200_material_bottom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qs3200 Material Middle'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['qs3200_material_middle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qs3200 Material Top'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['qs3200_material_top']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vu5330 Quality'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['vu5330_quality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vu5330 Smoothing'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['vu5330_smoothing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vu5330 Speed'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['vu5330_speed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vu3360 Quality'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['vu3360_quality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vu3360 Smoothing'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['vu3360_smoothing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vu3360 Speed'); ?></dt>
		<dd>
			<?php echo h($outputSetting['OutputSetting']['vu3360_speed']); ?>
			&nbsp;
		</dd>
			</dl>
		</div> <!-- end span -->
	</div> <!-- end row -->
</div> <!-- end view -->


		
	
<?php $this->start('sidebar'); ?>	<div class="sidebar well">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('pencil', 'black') .' '.__('Edit Output Setting'), array('action' => 'edit', $outputSetting['OutputSetting']['id']), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete Output Setting'), array('action' => 'delete', $outputSetting['OutputSetting']['id']), array('escape'=>false), __('Are you sure you want to delete # %s?', $outputSetting['OutputSetting']['id'])); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Output Settings'), array('action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Output Setting'), array('action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Setting Logs" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Setting Logs'), array('controller' => 'setting_logs', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Setting Log'), array('controller' => 'setting_logs', 'action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), "/", array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>
