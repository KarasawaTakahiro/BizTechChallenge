<?php
return array(
	'_root_'  => 'biztechpre/index',  // The default route
	'_404_'   => 'biztechpre/404',    // The main 404 route
	
	'hello(/:name)?' => array('biztechpre/hello', 'name' => 'hello'),
);
