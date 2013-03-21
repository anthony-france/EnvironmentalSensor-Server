<div class="clients index">
	<div class="row">
		<div class="span6">
			<h2>
				<?php echo __('Clients');?>				<?php echo $this->TwitterBootstrap->badge($this->Paginator->counter(array('format' => __('{:count}')))); ?>			</h2>
			
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
	<?php echo $this->Form->create('Client'); ?>	<table class="table table-striped table-condensed">
		<tr>
			<th class="selectcol"><?php echo $this->Form->checkbox("selectall", array("name" => "selectall", "hiddenField" => false)); ?></th>
												<?php if ( $settings["hide_id_column"] != "hide" ): ?><th><?php echo $this->Paginator->sort('id');?></th><?php endif; ?>															
																<th><?php echo $this->Paginator->sort('name');?></th>
		</tr>
	<?php
	foreach ($clients as $client): ?>
	<tr>
	<td>
<?php echo $this->Form->checkbox($client['Client']['id'], array("hiddenField" => false, "name"=>"selected", "id" =>$client['Client']['id'])); ?>	</td>
		<?php if ( $settings["hide_id_column"] != "hide" ): ?><td><?php echo h($client['Client']['id']); ?>&nbsp;</td><?php endif; ?>
		<td><?php echo $this->Html->link($client['Client']['name'], array('action' => 'view', $client['Client']['id'])); ?>&nbsp; <?php if (!empty($client['Tag'])) echo $this->element('tags', array('tags' => $client['Tag'])); ?></td>
	</tr>
<?php endforeach; ?>
	</table>
	<?php echo $this->Form->end(); ?>	<div class="row index-actions"> 
					<?php echo $this->TwitterBootstrap->button($this->TwitterBootstrap->icon('trash', 'white') .' '. __('Delete Clients'), array("type" => "submit", "action" => "delete", 'style'=>'danger', 'class'=>'grpdelbtn pull-right', 'escape'=>false, "onclick" => "del();")); ?> 
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
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Client'), array('action' => 'add'),  array('escape'=>false, 'class'=>'loadDialog')); ?></li>
					<li class="nav-header"><?php echo "Setting Logs" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Setting Logs'), array('controller' => 'setting_logs', 'action' => 'index'),  array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Setting Log'), array('controller' => 'setting_logs', 'action' => 'add'), array('escape'=>false, 'class'=>'loadDialog')); ?> </li>
			<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), "/", array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>