
<p class="ajax"></p>

<div id="slider">
	<div id="panel">
		 <span style="margin: 0 100px;">TA</span>
		 <img src="img/sb06logo3.jpg" />s
	</div>


	<p class="slide"><a href="#" class="btn-slide">Slide Panel</a></p>
</div>



<div class="brands index">


<h2 class="h2"><?php __('Brands');?></h2>

<div class="example cursor" id="example-1"><a href="#">example-1</a></div>

<div class="example cursor" id="example-3">example-3</div>

<div class="example cursor" id="example-4">example-4</div>

<div id="main">
<div id="large">
	<h2>眼睛男，痣男</h2>
	<img src="img/l/image01.jpg" title="ta" alt="image01.jpg"  />
</div>
<ul id="thumbnail">
	<li><a href="img/l/image01.jpg"><img src="img/t/image01.jpg" title="眼睛男，痣男" alt="image01.jpg" /></a></li>
	<li><a href="img/l/image02.jpg"><img src="img/t/image02.jpg" title="门神男" alt="image02.jpg" /></a></li>
	<li><a href="img/l/image03.jpg"><img src="img/t/image03.jpg" title="看门男" alt="image03.jpg" /></a></li>

	<li><a href="img/l/image04.jpg"><img src="img/t/image04.jpg" title="傲视男" alt="image04.jpg" /></a></li>
	<li><a href="img/l/image05.jpg"><img src="img/t/image05.jpg" title="过马路男" alt="image05.jpg" /></a></li>
	<li><a href="img/l/image06.jpg"><img src="img/t/image06.jpg" title="荒野男" alt="image06.jpg" /></a></li>

</ul>
</div>



<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><input type="checkbox" id="selectall"></th>
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
		<td><input type="checkbox" class="selectable" ></td>
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
