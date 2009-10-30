<div class="brands index">
<h2><?php __('Brands');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('url');?></th>
	<th><?php echo $paginator->sort('logo');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($brands as $brand):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $brand['Brand']['id']; ?>
		</td>
		<td>
			<?php echo $brand['Brand']['name']; ?>
		</td>
		<td>
			<?php echo $brand['Brand']['url']; ?>
		</td>
		<td>
			<?php echo $brand['Brand']['logo']; ?>
		</td>
		<td>
			<?php echo $brand['Brand']['created']; ?>
		</td>
		<td>
			<?php echo $brand['Brand']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $brand['Brand']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $brand['Brand']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $brand['Brand']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $brand['Brand']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Brand', true), array('action'=>'add')); ?></li>
	</ul>
</div>
