<div class="ripSettings view">
	
	<div class="row row-fluid">
		<div class="span12"><h2><?php echo __('Rip Setting');?></h2><?php if (!empty($ripSetting['Tag'])) echo $this->element('tags', array('tags' => $ripSetting['Tag'])); ?></div>
	</div>
	<div class="row row-fluid">
		<div class="span12">
			<dl>
						<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ripSetting['RipSetting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Setting Log'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ripSetting['SettingLog']['id'], array('controller' => 'setting_logs', 'action' => 'view', $ripSetting['SettingLog']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cyan'); ?></dt>
		<dd>
			<?php echo h($ripSetting['RipSetting']['cyan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Magenta'); ?></dt>
		<dd>
			<?php echo h($ripSetting['RipSetting']['magenta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Yellow'); ?></dt>
		<dd>
			<?php echo h($ripSetting['RipSetting']['yellow']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Black'); ?></dt>
		<dd>
			<?php echo h($ripSetting['RipSetting']['black']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Corrections File'); ?></dt>
		<dd>
			<?php echo h($ripSetting['RipSetting']['corrections_file']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curve File'); ?></dt>
		<dd>
			<?php echo h($ripSetting['RipSetting']['curve_file']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resolution'); ?></dt>
		<dd>
			<?php echo h($ripSetting['RipSetting']['resolution']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ripped In'); ?></dt>
		<dd>
			<?php echo h($ripSetting['RipSetting']['ripped_in']); ?>
			&nbsp;
		</dd>
			</dl>
		</div> <!-- end span -->
	</div> <!-- end row -->
</div> <!-- end view -->


		
	
<?php $this->start('sidebar'); ?>	<div class="sidebar well">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('pencil', 'black') .' '.__('Edit Rip Setting'), array('action' => 'edit', $ripSetting['RipSetting']['id']), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete Rip Setting'), array('action' => 'delete', $ripSetting['RipSetting']['id']), array('escape'=>false), __('Are you sure you want to delete # %s?', $ripSetting['RipSetting']['id'])); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Rip Settings'), array('action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Rip Setting'), array('action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Setting Logs" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Setting Logs'), array('controller' => 'setting_logs', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Setting Log'), array('controller' => 'setting_logs', 'action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), "/", array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>
