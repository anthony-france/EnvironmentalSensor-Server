<div class="settingLogs index">
	<div class="row">
		<div class="span3">
			<h2>
				<?php echo __('Setting Logs');?>				<?php echo $this->TwitterBootstrap->badge($this->Paginator->counter(array('format' => __('{:count}')))); ?>			</h2>
			
		</div>
		<div class="span9">
			<?php echo $this->element('search'); ?>
		</div>
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
	<?php echo $this->Form->create('SettingLog'); ?>	<table class="table table-striped table-condensed">
		<tr>
			<th class="selectcol"><?php echo $this->Form->checkbox("selectall", array("name" => "selectall", "hiddenField" => false)); ?></th>
			<?php if ( $settings["hide_id_column"] != "hide" ): ?><th>&nbsp;</th><?php endif; ?>																
			<th><?php echo $this->Paginator->sort('order_no');?></th>
			<th><?php echo $this->Paginator->sort('job_no');?></th>
			<th><?php echo $this->Paginator->sort('client_id');?></th>
			<th><?php echo $this->Paginator->sort('start_time');?></th>
			<th><?php echo $this->Paginator->sort('end_time');?></th>
		</tr>
	<?php
	foreach ($settingLogs as $settingLog): ?>
	<tr>
		<td><?php echo $this->Form->checkbox($settingLog['SettingLog']['id'], array("hiddenField" => false, "name"=>"selected", "id"=>$settingLog['SettingLog']['id']));?></td>
		<?php if ( $settings["hide_id_column"] != "hide" ): ?>
			<td><?php echo $this->Html->link($this->TwitterBootstrap->icon('info-sign', 'black')	, array("action" => "view", $settingLog['SettingLog']['id']), array('escape'=>false)); ?>&nbsp;</td>
		<?php endif; ?>
		<td><?php echo h($settingLog['SettingLog']['order_no']); ?>&nbsp;</td>
		<td><?php echo h($settingLog['SettingLog']['job_no']); ?>&nbsp;</td>
		<td><?php echo $settingLog['Client']['name']; ?></td>
		<td title="<?php echo h($settingLog['SettingLog']['start_time-formated']); ?>"><?php echo h($settingLog['SettingLog']['start_timejsformat']); ?>&nbsp;</td>
		<td title="<?php echo h($settingLog['SettingLog']['end_time-formated']); ?>"><?php echo h($settingLog['SettingLog']['end_timejsformat']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
	<?php echo $this->Form->end(); ?>	<div class="row index-actions"> 
					<?php echo $this->TwitterBootstrap->button($this->TwitterBootstrap->icon('trash', 'white') .' '. __('Delete Setting Logs'), array("type" => "submit", "action" => "delete", 'style'=>'danger', 'class'=>'grpdelbtn pull-right', 'escape'=>false, "onclick" => "del();")); ?> 
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
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Setting Log'), array('action' => 'add'),  array('escape'=>false, 'class'=>'loadDialog')); ?></li>
			<li class="nav-header"><?php echo "Clients" ?> </li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Clients'), array('controller' => 'clients', 'action' => 'index'),  array('escape'=>false)); ?> </li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Client'), array('controller' => 'clients', 'action' => 'add'), array('escape'=>false, 'class'=>'loadDialog')); ?> </li>
			<li class="divider"></li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), "/", array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>