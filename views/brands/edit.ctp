<div class="brands form">
<?php echo $form->create('Brand');?>
	<fieldset>
 		<legend><?php __('Edit Brand');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('url');
		echo $form->input('logo');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Brand.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Brand.id'))); ?></li>
		<li><?php echo $html->link(__('List Brands', true), array('action'=>'index'));?></li>
	</ul>
</div>
