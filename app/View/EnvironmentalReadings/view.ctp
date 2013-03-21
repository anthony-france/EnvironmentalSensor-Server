<div class="environmentalReadings view">
	
	<div class="row row-fluid">
		<div class="span12"><h2><?php echo __('Environmental Reading');?></h2><?php if (!empty($environmentalReading['Tag'])) echo $this->element('tags', array('tags' => $environmentalReading['Tag'])); ?></div>
	</div>
	<div class="row row-fluid">
		<div class="span12">
			<dl>
						<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($environmentalReading['EnvironmentalReading']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($environmentalReading['EnvironmentalReading']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($environmentalReading['EnvironmentalReading']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tempurature'); ?></dt>
		<dd>
			<?php echo h($environmentalReading['EnvironmentalReading']['tempurature']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Humidity'); ?></dt>
		<dd>
			<?php echo h($environmentalReading['EnvironmentalReading']['humidity']); ?>
			&nbsp;
		</dd>
			</dl>
		</div> <!-- end span -->
	</div> <!-- end row -->
</div> <!-- end view -->


		
	
<?php $this->start('sidebar'); ?>	<div class="sidebar well">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('pencil', 'black') .' '.__('Edit Environmental Reading'), array('action' => 'edit', $environmentalReading['EnvironmentalReading']['id']), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete Environmental Reading'), array('action' => 'delete', $environmentalReading['EnvironmentalReading']['id']), array('escape'=>false), __('Are you sure you want to delete # %s?', $environmentalReading['EnvironmentalReading']['id'])); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Environmental Readings'), array('action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Environmental Reading'), array('action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), "/", array('escape'=>false)); ?> </li>
		</ul>
	</div>
<?php $this->end(); ?>
