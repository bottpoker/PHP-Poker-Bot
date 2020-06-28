<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: system-ping.php 
	** Endpoint: system/ping
	** Name: System -> Ping 
	** Description: Ping the server for a timestamp.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='system/ping';

################
# Declare $post array
################
$post=array();


/* The endpoint */

################
# EXECUTE using specific function within class
################

$result = $obj->system_ping($post);

################
# EXECUTE using send(); Provide the name of the endpoint `system/ping` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		