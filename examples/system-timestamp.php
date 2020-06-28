<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: system-timestamp.php 
	** Endpoint: system/timestamp
	** Name: System -> Timestamp 
	** Description: The timestamp of the server for your synchronization.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='system/timestamp';

################
# Declare $post array
################
$post=array();


/* The endpoint */

################
# EXECUTE using specific function within class
################

$result = $obj->system_timestamp($post);

################
# EXECUTE using send(); Provide the name of the endpoint `system/timestamp` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		