<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: user-active-bots.php 
	** Endpoint: user/active-bots
	** Name: User -> Active Bots 
	** Description: All active bots which are currently either seated and playing or waiting for a `TRN` or `SNG` to start.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='user/active-bots';

################
# Declare $post array
################
$post=array();

$post['game_type']='';

################
# EXECUTE using specific function within class
################

$result = $obj->user_active_bots($post);

################
# EXECUTE using send(); Provide the name of the endpoint `user/active-bots` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		