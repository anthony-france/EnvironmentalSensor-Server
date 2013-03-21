<div class="comments view">
	
	<div class="row row-fluid">
		<div class="span12"><h2><?php echo __('Comment');?></h2><?php if (!empty($comment['Tag'])) echo $this->element('tags', array('tags' => $comment['Tag'])); ?></div>
	</div>
	<div class="row row-fluid">
		<div class="span12">
			<dl>
						<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Setting Log'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['SettingLog']['id'], array('controller' => 'setting_logs', 'action' => 'view', $comment['SettingLog']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['text']); ?>
			&nbsp;
		</dd>
			</dl>
		</div> <!-- end span -->
	</div> <!-- end row -->
</div> <!-- end view -->

	
<?php $this->start('sidebar'); ?>	
	<div class="sidebar well">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('pencil', 'black') .' '.__('Edit Comment'), array('action' => 'edit', $comment['Comment']['id']), array('escape'=>false)); ?> </li>
			<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete Comment'), array('action' => 'delete', $comment['Comment']['id']), array('escape'=>false), __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?> </li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Comments'), array('action' => 'index'), array('escape'=>false)); ?> </li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Comment'), array('action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="nav-header"><?php echo "Setting Logs" ?> </li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Setting Logs'), array('controller' => 'setting_logs', 'action' => 'index'), array('escape'=>false)); ?> </li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Setting Log'), array('controller' => 'setting_logs', 'action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="divider"></li>
			<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), "/", array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>
