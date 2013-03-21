<div class="logs view">
	
	<div class="row row-fluid">
		<div class="span12"><h2><?php echo __('Log');?></h2><?php if (!empty($log['Tag'])) echo $this->element('tags', array('tags' => $log['Tag'])); ?></div>
	</div>
	<div class="row row-fluid">
		<div class="span12">
			<dl>
						<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($log['Log']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($log['Log']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($log['Log']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order No'); ?></dt>
		<dd>
			<?php echo h($log['Log']['order_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job No'); ?></dt>
		<dd>
			<?php echo h($log['Log']['job_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($log['Client']['name'], array('controller' => 'clients', 'action' => 'view', $log['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($log['Log']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($log['Log']['end_time']); ?>
			&nbsp;
		</dd>
			</dl>
		</div> <!-- end span -->
	</div> <!-- end row -->
</div> <!-- end view -->


		<div class="row row-fluid">
		<div class="span12">
			<div class="related">
				<h3><?php echo __('Related Comments');?></h3><?php echo $this->TwitterBootstrap->badge(count($log['Comment'])); ?>				<?php if (!empty($log['Comment'])):?>
				<table class="table table-striped table-condensed">
					<tr>
								<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Log Id'); ?></th>
		<th><?php echo __('Text'); ?></th>
					</tr>
						<?php
								$i = 0;
								foreach ($log['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id'];?></td>
			<td><?php echo $comment['log_id'];?></td>
			<td><?php echo $comment['text'];?></td>
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
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('pencil', 'black') .' '.__('Edit Log'), array('action' => 'edit', $log['Log']['id']), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete Log'), array('action' => 'delete', $log['Log']['id']), array('escape'=>false), __('Are you sure you want to delete # %s?', $log['Log']['id'])); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Logs'), array('action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Log'), array('action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Clients" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Clients'), array('controller' => 'clients', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Client'), array('controller' => 'clients', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Comments" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Comments'), array('controller' => 'comments', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Comment'), array('controller' => 'comments', 'action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>
