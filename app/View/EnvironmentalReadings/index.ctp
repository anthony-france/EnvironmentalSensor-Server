<div class="environmentalReadings index">
	<div class="row">
		<div class="span6">
			<h2>
				<?php echo __('Environmental Readings');?>				<?php echo $this->TwitterBootstrap->badge($this->Paginator->counter(array('format' => __('{:count}')))); ?>			</h2>
			
		</div>
		<div class="span6"><?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('plus-sign', 'white') .' '.'Add Environmental Reading', array('action'=>'add'), array('class'=>'pull-right', 'escape'=>false, 'style'=>'primary'));?></div>
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
	<?php echo $this->element('enviro-report', array("start" => $environmentalReadings[0]['EnvironmentalReading']['created'], "end" => $environmentalReadings[count($environmentalReadings) - 1]['EnvironmentalReading']['created'])); ?>	
	<?php echo $this->Form->create('EnvironmentalReading'); ?>	<table class="table table-striped table-condensed">
		<tr>
			<th class="selectcol"><?php echo $this->Form->checkbox("selectall", array("name" => "selectall", "hiddenField" => false)); ?></th>
												<?php if ( $settings["hide_id_column"] != "hide" ): ?><th><?php echo $this->Paginator->sort('id');?></th><?php endif; ?>																<th><?php echo $this->Paginator->sort('created');?></th>
																<th><?php echo $this->Paginator->sort('updated');?></th>
																<th><?php echo $this->Paginator->sort('tempurature');?></th>
																<th><?php echo $this->Paginator->sort('humidity');?></th>
										<th></th>
		</tr>
	<?php
	foreach ($environmentalReadings as $environmentalReading): ?>
	<tr>
	<td>
<?php echo $this->Form->checkbox($environmentalReading['EnvironmentalReading']['id'], array("hiddenField" => false, "name"=>"selected", "id" =>$environmentalReading['EnvironmentalReading']['id'])); ?>	</td>
		<?php if ( $settings["hide_id_column"] != "hide" ): ?><td><?php echo h($environmentalReading['EnvironmentalReading']['id']); ?>&nbsp;</td><?php endif; ?>
		<td><?php echo h($environmentalReading['EnvironmentalReading']['created']); ?>&nbsp;</td>
		<td><?php echo h($environmentalReading['EnvironmentalReading']['updated']); ?>&nbsp;</td>
		<td><?php echo h($environmentalReading['EnvironmentalReading']['tempurature']); ?>&nbsp;</td>
		<td><?php echo h($environmentalReading['EnvironmentalReading']['humidity']); ?>&nbsp;</td>
		<td>
			<div><?php echo $this->Html->link($this->TwitterBootstrap->icon('cog', 'black'), array('action' => 'edit', $environmentalReading['EnvironmentalReading']['id']), array('escape'=>false, 'class'=>'row-edit-link pull-right')); ?></div>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
	<?php echo $this->Form->end(); ?>	<div class="row index-actions"> 
					<?php echo $this->TwitterBootstrap->button($this->TwitterBootstrap->icon('trash', 'white') .' '. __('Delete Environmental Readings'), array("type" => "submit", "action" => "delete", 'style'=>'danger', 'class'=>'grpdelbtn pull-right', 'escape'=>false, "onclick" => "del();")); ?> 
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
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Environmental Reading'), array('action' => 'add'),  array('escape'=>false)); ?></li>
						<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), "/", array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>