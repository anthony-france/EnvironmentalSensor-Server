<div class="clients view">
	
	<div class="row row-fluid">
		<div class="span12"><h2><?php echo __('Client');?></h2><?php if (!empty($client['Tag'])) echo $this->element('tags', array('tags' => $client['Tag'])); ?></div>
	</div>
	
	<div class="row row-fluid">
		<div class="span12">
		<dl>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($client['Client']['name']); ?>
				&nbsp;
			</dd>
		</dl>
		</div> <!-- end span -->
	</div> <!-- end row -->

</div> <!-- end view -->

<div class="row row-fluid">
	<div class="span12">
		<div class="related">
			<h3><?php echo __('Related Setting Logs');?><?php echo $this->TwitterBootstrap->badge(count($client['SettingLog'])); ?>	</h3>
		<?php if (!empty($client['SettingLog'])):?>
				<table class="table table-striped table-condensed">
					<tr>
						<th>&nbsp;</th>
						<th><?php echo __('Order No'); ?></th>
						<th><?php echo __('Job No'); ?></th>
						<th><?php echo __('Start Time'); ?></th>
					</tr>
				<?php
					$i = 0;
					foreach ($client['SettingLog'] as $settingLog): 
				?>
					<tr>
						<td><?php echo $this->Html->link($this->TwitterBootstrap->icon('info-sign', 'black'), array("controller" => "setting_logs", "action" => "view", $settingLog['id']), array('escape'=>false)); ?>&nbsp;</td>
						<td><?php echo $settingLog['order_no'];?></td>
						<td><?php echo $settingLog['job_no'];?></td>
						<td title="<?php echo $settingLog['start_time-formated']; ?>"><?php echo $settingLog['start_timejsformat'];?></td>
					</tr>
				<?php endforeach; ?>
				</table>
		<?php endif; ?>

		</div> <!-- end related -->
	</div> <!-- end span -->
</div> <!-- end row -->
		
	
<?php $this->start('sidebar'); ?>	<div class="sidebar well">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('pencil', 'black') .' '.__('Edit Client'), array('action' => 'edit', $client['Client']['id']), array('escape'=>false, 'class'=>'loadDialog')); ?> </li>
			<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete Client'), array('action' => 'delete', $client['Client']['id']), array('escape'=>false), __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?> </li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Clients'), array('action' => 'index'), array('escape'=>false)); ?> </li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Client'), array('action' => 'add'), array('escape'=>false, 'class'=>'loadDialog')); ?> </li>
			<li class="nav-header"><?php echo "Setting Logs" ?> </li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Setting Logs'), array('controller' => 'setting_logs', 'action' => 'index'), array('escape'=>false)); ?> </li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Setting Log'), array('controller' => 'setting_logs', 'action' => 'add'), array('escape'=>false, 'class'=>'loadDialog')); ?> </li>
			<li class="divider"></li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), "/", array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>
