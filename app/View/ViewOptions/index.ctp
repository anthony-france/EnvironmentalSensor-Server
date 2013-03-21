<div class="viewOptions index">
	<div class="row">
		<div class="span6">
			<h2>
				<?php echo __('View Options');?>				<?php echo $this->TwitterBootstrap->badge($this->Paginator->counter(array('format' => __('{:count}')))); ?>			</h2>
			
		</div>
		<div class="span6"><?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('plus-sign', 'white') .' '.'Add View Option', array('action'=>'add'), array('class'=>'pull-right', 'escape'=>false, 'style'=>'primary'));?></div>
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
	<?php echo $this->Form->create('ViewOption'); ?>	<table class="table table-striped table-condensed">
		<tr>
			<th class="selectcol"><?php echo $this->Form->checkbox("selectall", array("name" => "selectall", "hiddenField" => false)); ?></th>
												<?php if ( $settings["hide_id_column"] != "hide" ): ?><th><?php echo $this->Paginator->sort('id');?></th><?php endif; ?>																<th><?php echo $this->Paginator->sort('model');?></th>
										<th></th>
		</tr>
	<?php
	foreach ($viewOptions as $viewOption): ?>
	<tr>
	<td>
<?php echo $this->Form->checkbox($viewOption['ViewOption']['id'], array("hiddenField" => false, "name"=>"selected", "id" =>$viewOption['ViewOption']['id'])); ?>	</td>
		<?php if ( $settings["hide_id_column"] != "hide" ): ?><td><?php echo h($viewOption['ViewOption']['id']); ?>&nbsp;</td><?php endif; ?>
		<td><?php echo h($viewOption['ViewOption']['model']); ?>&nbsp;</td>
		<td>
			<div><?php echo $this->Html->link($this->TwitterBootstrap->icon('cog', 'black'), array('action' => 'edit', $viewOption['ViewOption']['id']), array('escape'=>false, 'class'=>'row-edit-link pull-right')); ?></div>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
	<?php echo $this->Form->end(); ?>	<div class="row index-actions"> 
					<?php echo $this->TwitterBootstrap->button($this->TwitterBootstrap->icon('trash', 'white') .' '. __('Delete View Options'), array("type" => "submit", "action" => "delete", 'style'=>'danger', 'class'=>'grpdelbtn pull-right', 'escape'=>false, "onclick" => "del();")); ?> 
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
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New View Option'), array('action' => 'add'),  array('escape'=>false)); ?></li>
						<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>