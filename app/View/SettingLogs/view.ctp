<div class="settingLogs view">
	
	<div class="row row-fluid">
		<div class="span12">
			<h2><?php echo __('Setting Log');?></h2>
			<?php echo $this->Html->link($this->TwitterBootstrap->icon('pencil', 'black') .' '.__('Edit'), array('action' => 'edit', $settingLog['SettingLog']['id']), array('class' => 'loadDialog', 'escape'=>false)); ?> 
			<?php if (!empty($settingLog['Tag'])) echo $this->element('tags', array('tags' => $settingLog['Tag'])); ?>
		</div>
	</div>
	<div class="row row-fluid">
		<div class="span3">
		<dl>
			<dt><?php echo __('Order No'); ?></dt>
			<dd>
				<?php echo h($settingLog['SettingLog']['order_no']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Job No'); ?></dt>
			<dd>
				<?php echo h($settingLog['SettingLog']['job_no']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Client'); ?></dt>
			<dd>
				<?php echo $this->Html->link($settingLog['Client']['name'], array('controller' => 'clients', 'action' => 'view', $settingLog['Client']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Start Time'); ?></dt>
			<dd title="<?php echo h($settingLog['SettingLog']['start_time-formated']); ?>">
				<?php echo h($settingLog['SettingLog']['start_timejsformat']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('End Time'); ?></dt>
			<dd title="<?php echo h($settingLog['SettingLog']['end_time-formated']); ?>">
				<?php echo h($settingLog['SettingLog']['end_timejsformat']); ?>
				&nbsp;
			</dd>
		</dl>
		</div> <!-- end span -->
		
		<div class="span9">
			<?php echo $this->element('enviro-report', array("start" => $settingLog['SettingLog']['start_time'], "end" => $settingLog['SettingLog']['end_time'])); ?>	
		</div> <!-- end span -->
	</div> <!-- end row -->
</div> <!-- end view -->

	<div class="row row-fluid">
		<div class="span6">
			<a id="output"></a>
			<div class="related">
				<h3><?php echo __('Output Settings');?></h3><?php echo $this->Html->link($this->TwitterBootstrap->icon('pencil', 'black') .' '.__('Edit'), array('controller' => 'output_settings', 'action' => 'edit', $settingLog['OutputSetting']['id']), array('class' => 'loadDialog', 'escape'=>false)); ?>
				<?php if (!empty($settingLog['OutputSetting'])):?>
				<dl>
						<?php if (!empty($settingLog['OutputSetting']['fb6700_pretreatment'])): ?><dt><?php echo __('Fb6700 Pretreatment');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['fb6700_pretreatment'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['fb6700_passes'])): ?><dt><?php echo __('Fb6700 Passes');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['fb6700_passes'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['fb6700_curve'])): ?><dt><?php echo __('Fb6700 Curve');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['fb6700_curve'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['fb6700_heat'])): ?><dt><?php echo __('Fb6700 Heat');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['fb6700_heat'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['fb6700_IRs'])): ?><dt><?php echo __('Fb6700 IRs');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['fb6700_IRs'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['fb6700_belt_speed'])): ?><dt><?php echo __('Fb6700 Belt Speed');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['fb6700_belt_speed'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['fb6700_carrage_height'])): ?><dt><?php echo __('Fb6700 Carrage Height');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['fb6700_carrage_height'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['hp5300_mode'])): ?><dt><?php echo __('Hp5300 Mode');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['hp5300_mode'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['hp5300_quality'])): ?><dt><?php echo __('Hp5300 Quality');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['hp5300_quality'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty( $settingLog['OutputSetting']['hp5300_UV_curing'])): ?><dt><?php echo __('Hp5300 UV Curing');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['hp5300_UV_curing'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['l25500_device'])): ?><dt><?php echo __('L25500 Device');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['l25500_device'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['l25500_resolution'])): ?><dt><?php echo __('L25500 Resolution');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['l25500_resolution'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['l25500_quality'])): ?><dt><?php echo __('L25500 Quality');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['l25500_quality'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['tj8300_resolution'])): ?><dt><?php echo __('Tj8300 Resolution');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['tj8300_resolution'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['tj8300_mode'])): ?><dt><?php echo __('Tj8300 Mode');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['tj8300_mode'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['tj8300_setting'])): ?><dt><?php echo __('Tj8300 Setting');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['tj8300_setting'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['tj8300_bridge_shift'])): ?><dt><?php echo __('Tj8300 Bridge Shift');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['tj8300_bridge_shift'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['tj8300_double_strike'])): ?><dt><?php echo __('Tj8300 Double Strike');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['tj8300_double_strike'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['tj8300_rotate'])): ?><dt><?php echo __('Tj8300 Rotate');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['tj8300_rotate'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['tj8300_mirror'])): ?><dt><?php echo __('Tj8300 Mirror');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['tj8300_mirror'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['z6100_device'])): ?><dt><?php echo __('Z6100 Device');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['z6100_device'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['z6100_quality'])): ?><dt><?php echo __('Z6100 Quality');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['z6100_quality'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['qs3200_device'])): ?><dt><?php echo __('Qs3200 Device');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['qs3200_device'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['qs3200_smoothing'])): ?><dt><?php echo __('Qs3200 Smoothing');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['qs3200_smoothing'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['qs3200_curing'])): ?><dt><?php echo __('Qs3200 Curing');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['qs3200_curing'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty( $settingLog['OutputSetting']['qs3200_shutter'])): ?><dt><?php echo __('Qs3200 Shutter');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['qs3200_shutter'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['qs3200_layer_specifications'])): ?><dt><?php echo __('Qs3200 Layer Specifications');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['qs3200_layer_specifications'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['qs3200_material_bottom'])): ?><dt><?php echo __('Qs3200 Material Bottom');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['qs3200_material_bottom'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['qs3200_material_middle'])): ?><dt><?php echo __('Qs3200 Material Middle');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['qs3200_material_middle'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['qs3200_material_top'])): ?><dt><?php echo __('Qs3200 Material Top');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['qs3200_material_top'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty( $settingLog['OutputSetting']['vu5330_quality'])): ?><dt><?php echo __('Vu5330 Quality');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['vu5330_quality'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['vu5330_smoothing'])): ?><dt><?php echo __('Vu5330 Smoothing');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['vu5330_smoothing'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['vu5330_speed'])): ?><dt><?php echo __('Vu5330 Speed');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['vu5330_speed'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['vu3360_quality'])): ?><dt><?php echo __('Vu3360 Quality');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['vu3360_quality'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['vu3360_smoothing'])): ?><dt><?php echo __('Vu3360 Smoothing');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['vu3360_smoothing'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['OutputSetting']['vu3360_speed'])): ?><dt><?php echo __('Vu3360 Speed');?></dt>
						<dd>
					<?php echo $settingLog['OutputSetting']['vu3360_speed'];?>
				&nbsp;</dd><?php endif; ?>
				</dl>
				<?php endif; ?>
			</div> <!-- end related -->
		</div> <!-- end span -->
		<div class="span6">
			<a id="rip"></a>
			<div class="related">
				<h3><?php echo __('Rip Settings');?></h3><?php echo $this->Html->link($this->TwitterBootstrap->icon('pencil', 'black') .' '.__('Edit'), array('controller' => 'rip_settings', 'action' => 'edit', $settingLog['RipSetting']['id']), array('class' => 'loadDialog', 'escape'=>false)); ?>
				<?php if (!empty($settingLog['RipSetting'])):?>
				<dl>
						<?php if (!empty($settingLog['RipSetting']['cyan'])): ?><dt><?php echo __('Cyan');?></dt>
						<dd>
					<?php echo $settingLog['RipSetting']['cyan'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['RipSetting']['magenta'])): ?><dt><?php echo __('Magenta');?></dt>
						<dd>
					<?php echo $settingLog['RipSetting']['magenta'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['RipSetting']['yellow'])): ?><dt><?php echo __('Yellow');?></dt>
						<dd>
					<?php echo $settingLog['RipSetting']['yellow'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['RipSetting']['black'])): ?><dt><?php echo __('Black');?></dt>
						<dd>
					<?php echo $settingLog['RipSetting']['black'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['RipSetting']['corrections_file'])): ?><dt><?php echo __('Corrections File');?></dt>
						<dd>
					<?php echo $this->Html->link(
									$settingLog['RipSetting']['corrections_file'], 
									DS . $settingLog['RipSetting']['corrections_file_dir'] . DS . $settingLog['RipSetting']['corrections_file'], 
									array(
										'escape' => false,
									)
								);?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['RipSetting']['curve_file'])): ?><dt><?php echo __('Curve File');?></dt>
						<dd>
						<?php echo $this->Html->link(
									$settingLog['RipSetting']['curve_file'], 
									DS . $settingLog['RipSetting']['curve_file_dir'] . DS . $settingLog['RipSetting']['curve_file'], 
									array(
										'escape' => false,
									)
								);?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['RipSetting']['resolution'])): ?><dt><?php echo __('Resolution');?></dt>
						<dd>
					<?php echo $settingLog['RipSetting']['resolution'];?>
				&nbsp;</dd><?php endif; ?>
						<?php if (!empty($settingLog['RipSetting']['ripped_in'])): ?><dt><?php echo __('Ripped In');?></dt>
						<dd>
					<?php echo $settingLog['RipSetting']['ripped_in'];?>
				&nbsp;</dd><?php endif; ?>
				</dl>
				<?php endif; ?>
			</div> <!-- end related -->
		</div> <!-- end span -->
</div> <!-- end row -->
	
<div class="row row-fluid">
	<div class="span8">
		<div class="related">
			<?php if (!empty($settingLog['Comment'])):?>
				<?php echo $this->element('comments', array("comments"=>$settingLog['Comment'])); ?>
			<?php endif; ?>
			<a id="comments">&nbsp;</a>
			<?php 
				echo $this->Form->create("Comment", array("action"=>"add")); 
				echo $this->Form->input("Comment.text");
				echo $this->Form->input("Comment.setting_log_id", array("type"=>"hidden", "value"=>$settingLog['SettingLog']['id']));
				echo $this->Form->end("Comment");
			?>
		</div> <!-- end related -->
	</div> <!-- end span -->
</div> <!-- end row -->
	
<?php $this->start('sidebar'); ?>	<div class="sidebar well">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete Setting Log'), array('action' => 'delete', $settingLog['SettingLog']['id']), array('escape'=>false), __('Are you sure you want to delete # %s?', $settingLog['SettingLog']['id'])); ?> </li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Setting Logs'), array('action' => 'index'), array('escape'=>false)); ?> </li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Setting Log'), array('action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="nav-header"><?php echo "Sections" ?> </li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('View Output Settings'), "#output", array('class' => 'scrollTo', 'escape'=>false)); ?> </li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('View Rip Settings'), "#rip", array('class' => 'scrollTo', 'escape'=>false)); ?> </li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('View Comments'), "#comments", array('class' => 'scrollTo', 'escape'=>false)); ?> </li>
			<li class="divider"></li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), "/", array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>

