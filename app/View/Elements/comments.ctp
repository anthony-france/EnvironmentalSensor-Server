<a id="comments">&nbsp;</a>
<div id="comments">
	<h3><?php echo __('Comments');?><?php echo $this->TwitterBootstrap->badge(count($comments)); ?></h3>
	<?php foreach($comments as $comment):  ?>
		<div class="comment row">
			<div class="span2"><div class="created"><?php echo $comment['created-formated']; ?></div></div>
			<div class="span9"><div class="text"><?php echo $comment['text']; ?></div></div>
		</div>
	<?php endforeach; ?>
</div>
