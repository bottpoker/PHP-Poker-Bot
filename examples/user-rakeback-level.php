<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: user-rakeback-level.php 
	** Endpoint: user/rakeback-level
	** Name: User -> User Rakeback Level 
	** Description: Information about your current rakeback percentage. Rakebacks are settled every 24 houts.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='user/rakeback-level';

################
# Declare $post array
################
$post=array();


/* The endpoint */

################
# EXECUTE using specific function within class
################

$result = $obj->user_rakeback_level($post);

################
# EXECUTE using send(); Provide the name of the endpoint `user/rakeback-level` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		