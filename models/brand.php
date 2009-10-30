<?php
class Brand extends AppModel {

	var $name = 'Brand';
	var $validate = array(
		'id' => array('alphanumeric'),
		'name' => array('alphanumeric')
	);

}
?>