<div class="brands form">
<?php echo $form->create('Brand');?>
	<fieldset>
 		<legend><?php __('Add Brand');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('url');
		echo $form->input('logo');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Brands', true), array('action'=>'index'));?></li>
	</ul>
</div>
