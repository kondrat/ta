<div style="margin-left: 200px;">
  <?php echo $html->image("risachoklogo3.jpg", array( "class" => "logo" )); ?>
  <br />
  <div>
  	<div class="testDiv" ><?php echo $html->image("risachoklogo2.jpg", array("id" => "risachoklogo3" , "class" => "small"  )); ?><p><?php echo $html->link('Go', array('controller' => 'project', 'action' => 'index') );?></p></div>
  	<div class="testDiv" ><?php echo  $html->image("sb06logo2.jpg", array("id" => "sb06logo3" , "class" => "small" )) ; ?><p></p></div>
  	<div class="testDiv" ><?php echo $html->image("finistlogo2.jpg", array("id" => "finistlogo3" , "class" => "small" )) ; ?><p></p></div>
  </div>
  <div style="clear: both;"></div>
</div>

<p><?php echo $html->link("Brand", array('controller' => 'brands', 'action' => 'index') ); ?></p>
<br />
<br />
<p><?php echo $html->link("LogIn", array('controller' => 'users', 'action' => 'login') ); ?></p>
<p><?php echo $html->link("LogOut", array('controller' => 'users', 'action' => 'logout') ); ?></p>
<p><?php //echo $html->link("SignUp", array('controller' => 'users', 'action' => 'reg') ); ?></p>