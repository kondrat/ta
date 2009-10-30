<table cellspacing="0" cellpadding="0" border="0" width="819">
<tr>
	<td width="385" class="text2" valign="top">
	
	<?php echo $form->create('User', array('action' => 'reg' ) ); ?>
	<fieldset>
	<legend>Регистрационная форма:</legend>
	<table cellspacing="0" cellpadding="0" border="0" class="text3" width="385">

<tr>
	<td colspan="2" height="25"></td>
</tr>
<tr>
	<td height="40" width="120"><b>Логин:</b></td>
	<td width="265">
		<?php echo $form->text('username', array('class' => 'form' ) ); ?>
		<?php echo $form->error( 'username', array('class' => 'error', 'style' => 'color: red') ); ?>
	</td>
</tr>

<tr>
	<td height="40" width="120"><b>Пароль:</b></td>
	<td width="265">
        <?php echo $form->password('password1' , array('class' => 'form') ); ?>
        <?php echo $form->error( 'password1', array('class' => 'error', 'style' => 'color: red') ); ?>
	</td>
</tr>
<tr>
	<td height="40" width="120"><b>Подтверждение пароля:</b></td>
	<td width="265">
		<?php echo $form->password('password2', array('class' => 'form' ) ); ?>
     	<?php echo $form->error( 'password2', array('class' => 'error', 'style' => 'color: red') ); ?>
	</td>
</tr>

<tr>
	<td height="40" width="120"><b>Роль:</b></td>
	<td width="265">
		<?php //echo $form->input('role', array('type' => 'select', 'value' => 1, 'options' => array( 1 => 'admin', 2 => 'user'), 'class' => 'form', 'label' => false)); ?>
     	<?php //echo $form->error( 'role', array('class' => 'error', 'style' => 'color: red') ); ?>
	</td>
</tr>

	
<tr>
	<td colspan="2" height="12"></td>
</tr>
</table>
</fieldset>

<br><br>

	
	
	
	</td>
</tr>
</table>
	<div align="left">
		<?php echo $form->submit('Регистрация' ); ?>
	</div>
		<?php echo $form->end(); ?>


 
	</td>
	<td width="60"></td>
</tr>
</table>