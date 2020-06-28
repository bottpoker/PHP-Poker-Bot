<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: user-game-history.php 
	** Endpoint: user/game-history
	** Name: User -> Game History 
	** Description: A full game history, you should cross reference the provided IDs with other endpoints for a richer data experience.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='user/game-history';

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

$result = $obj->user_game_history($post);

################
# EXECUTE using send(); Provide the name of the endpoint `user/game-history` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		