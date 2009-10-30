<?php
echo $form->create('User', array('action' => 'login') );
echo $form->input('username', array('between' => '<br />'));
echo $form->input('password',  array('between' => '<br />'));
?>
<div id="remember"><?php echo $form->input('remember', array(
	'type' => 'checkbox',
	'label' => 'Remember me?')); ?></div>
<?php
echo $form->submit('Log in');
echo $form->end();
?>
<p id="gohome"><?php echo $html->link("Back to TA", '/'); ?></p>
