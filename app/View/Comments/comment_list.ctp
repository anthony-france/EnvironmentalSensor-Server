<div class="comments index">
	<table class="table table-striped table-condensed">
	<?php
	foreach ($comments as $comment): ?>
	
	<tr>
		<td><?php echo h($comment['Comment']['created-formated']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['text']); ?>&nbsp;</td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>
