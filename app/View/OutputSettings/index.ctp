<div class="outputSettings index">
	<div class="row">
		<div class="span6">
			<h2>
				<?php echo __('Output Settings');?>				<?php echo $this->TwitterBootstrap->badge($this->Paginator->counter(array('format' => __('{:count}')))); ?>			</h2>
			
		</div>
		<div class="span6"><?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('plus-sign', 'white') .' '.'Add Output Setting', array('action'=>'add'), array('class'=>'pull-right', 'escape'=>false, 'style'=>'primary'));?></div>
	</div>
	<div class="row">
		<div class="span12">
			<div class="paging top pull-right">
			<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
			</div>
		</div>
	</div>
	<?php echo $this->Form->create('OutputSetting'); ?>	<table class="table table-striped table-condensed">
		<tr>
			<th class="selectcol"><?php echo $this->Form->checkbox("selectall", array("name" => "selectall", "hiddenField" => false)); ?></th>
												<?php if ( $settings["hide_id_column"] != "hide" ): ?><th><?php echo $this->Paginator->sort('id');?></th><?php endif; ?>																<th><?php echo $this->Paginator->sort('setting_log_id');?></th>
																<th><?php echo $this->Paginator->sort('fb6700_pretreatment');?></th>
																<th><?php echo $this->Paginator->sort('fb6700_passes');?></th>
																<th><?php echo $this->Paginator->sort('fb6700_curve');?></th>
																<th><?php echo $this->Paginator->sort('fb6700_heat');?></th>
																<th><?php echo $this->Paginator->sort('fb6700_IRs');?></th>
																<th><?php echo $this->Paginator->sort('fb6700_belt_speed');?></th>
																<th><?php echo $this->Paginator->sort('fb6700_carrage_height');?></th>
																<th><?php echo $this->Paginator->sort('hp5300_mode');?></th>
																<th><?php echo $this->Paginator->sort('hp5300_quality');?></th>
																<th><?php echo $this->Paginator->sort('hp5300_UV_curing');?></th>
																<th><?php echo $this->Paginator->sort('l25500_device');?></th>
																<th><?php echo $this->Paginator->sort('l25500_resolution');?></th>
																<th><?php echo $this->Paginator->sort('l25500_quality');?></th>
																<th><?php echo $this->Paginator->sort('tj8300_resolution');?></th>
																<th><?php echo $this->Paginator->sort('tj8300_mode');?></th>
																<th><?php echo $this->Paginator->sort('tj8300_setting');?></th>
																<th><?php echo $this->Paginator->sort('tj8300_bridge_shift');?></th>
																<th><?php echo $this->Paginator->sort('tj8300_double_strike');?></th>
																<th><?php echo $this->Paginator->sort('tj8300_rotate');?></th>
																<th><?php echo $this->Paginator->sort('tj8300_mirror');?></th>
																<th><?php echo $this->Paginator->sort('z6100_device');?></th>
																<th><?php echo $this->Paginator->sort('z6100_quality');?></th>
																<th><?php echo $this->Paginator->sort('qs3200_device');?></th>
																<th><?php echo $this->Paginator->sort('qs3200_smoothing');?></th>
																<th><?php echo $this->Paginator->sort('qs3200_curing');?></th>
																<th><?php echo $this->Paginator->sort('qs3200_shutter');?></th>
																<th><?php echo $this->Paginator->sort('qs3200_layer_specifications');?></th>
																<th><?php echo $this->Paginator->sort('qs3200_material_bottom');?></th>
																<th><?php echo $this->Paginator->sort('qs3200_material_middle');?></th>
																<th><?php echo $this->Paginator->sort('qs3200_material_top');?></th>
																<th><?php echo $this->Paginator->sort('vu5330_quality');?></th>
																<th><?php echo $this->Paginator->sort('vu5330_smoothing');?></th>
																<th><?php echo $this->Paginator->sort('vu5330_speed');?></th>
																<th><?php echo $this->Paginator->sort('vu3360_quality');?></th>
																<th><?php echo $this->Paginator->sort('vu3360_smoothing');?></th>
																<th><?php echo $this->Paginator->sort('vu3360_speed');?></th>
										<th></th>
		</tr>
	<?php
	foreach ($outputSettings as $outputSetting): ?>
	<tr>
	<td>
<?php echo $this->Form->checkbox($outputSetting['OutputSetting']['id'], array("hiddenField" => false, "name"=>"selected", "id" =>$outputSetting['OutputSetting']['id'])); ?>	</td>
		<?php if ( $settings["hide_id_column"] != "hide" ): ?><td><?php echo h($outputSetting['OutputSetting']['id']); ?>&nbsp;</td><?php endif; ?>
		<td>
			<?php echo $this->Html->link($outputSetting['SettingLog']['id'], array('controller' => 'setting_logs', 'action' => 'view', $outputSetting['SettingLog']['id'])); ?>
		</td>
		<td><?php echo h($outputSetting['OutputSetting']['fb6700_pretreatment']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['fb6700_passes']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['fb6700_curve']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['fb6700_heat']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['fb6700_IRs']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['fb6700_belt_speed']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['fb6700_carrage_height']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['hp5300_mode']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['hp5300_quality']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['hp5300_UV_curing']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['l25500_device']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['l25500_resolution']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['l25500_quality']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['tj8300_resolution']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['tj8300_mode']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['tj8300_setting']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['tj8300_bridge_shift']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['tj8300_double_strike']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['tj8300_rotate']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['tj8300_mirror']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['z6100_device']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['z6100_quality']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['qs3200_device']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['qs3200_smoothing']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['qs3200_curing']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['qs3200_shutter']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['qs3200_layer_specifications']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['qs3200_material_bottom']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['qs3200_material_middle']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['qs3200_material_top']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['vu5330_quality']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['vu5330_smoothing']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['vu5330_speed']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['vu3360_quality']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['vu3360_smoothing']); ?>&nbsp;</td>
		<td><?php echo h($outputSetting['OutputSetting']['vu3360_speed']); ?>&nbsp;</td>
		<td>
			<div><?php echo $this->Html->link($this->TwitterBootstrap->icon('cog', 'black'), array('action' => 'edit', $outputSetting['OutputSetting']['id']), array('escape'=>false, 'class'=>'row-edit-link pull-right')); ?></div>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
	<?php echo $this->Form->end(); ?>	<div class="row index-actions"> 
					<?php echo $this->TwitterBootstrap->button($this->TwitterBootstrap->icon('trash', 'white') .' '. __('Delete Output Settings'), array("type" => "submit", "action" => "delete", 'style'=>'danger', 'class'=>'grpdelbtn pull-right', 'escape'=>false, "onclick" => "del();")); ?> 
	</div>	

	<div class="row">
			<div class="span12">
				<div class="paging bottom pull-right">
				<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
				</div>
			</div>
				<p>
				<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>				</p>
		</div>
</div>


<?php $this->start('sidebar'); ?>	<div class="sidebar well">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Output Setting'), array('action' => 'add'),  array('escape'=>false)); ?></li>
					<li class="nav-header"><?php echo "Setting Logs" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Setting Logs'), array('controller' => 'setting_logs', 'action' => 'index'),  array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Setting Log'), array('controller' => 'setting_logs', 'action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), "/", array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>