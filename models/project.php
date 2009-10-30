<?php
class Project extends AppModel {

	var $name = 'Project';
	var $validate = array(
		'name' => array('notempty')
	);

}
?>