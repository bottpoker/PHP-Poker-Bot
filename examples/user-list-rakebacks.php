<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: user-list-rakebacks.php 
	** Endpoint: user/list-rakebacks
	** Name: User -> User List Rakebacks 
	** Description: List all of your rakebacks you have made in your account. You can filter down to `bot_id`

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='user/list-rakebacks';

################
# Declare $post array
################
$post=array();

$post['limit']='10';
$post['page']='1';
$post['bot_id']='';

################
# EXECUTE using specific function within class
################

$result = $obj->user_list_rakebacks($post);

################
# EXECUTE using send(); Provide the name of the endpoint `user/list-rakebacks` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		