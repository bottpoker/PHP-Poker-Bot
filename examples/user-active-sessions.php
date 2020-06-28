<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: user-active-sessions.php 
	** Endpoint: user/active-sessions
	** Name: User -> User Active Sessions 
	** Description: A list of all active sessions happening on bottpoker.com

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='user/active-sessions';

################
# Declare $post array
################
$post=array();

$post['limit']='10';
$post['page']='1';

################
# EXECUTE using specific function within class
################

$result = $obj->user_active_sessions($post);

################
# EXECUTE using send(); Provide the name of the endpoint `user/active-sessions` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		