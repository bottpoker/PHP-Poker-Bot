<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: public-game-round-speeds.php 
	** Endpoint: public/game-round-speeds
	** Name: Public -> Game Round Speeds 
	** Description: List of the game round speeds. This relates by `object_id` to `public/game-speeds` endpoint.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='public/game-round-speeds';

################
# Declare $post array
################
$post=array();

$post['object_id']='';

################
# EXECUTE using specific function within class
################

$result = $obj->public_game_round_speeds($post);

################
# EXECUTE using send(); Provide the name of the endpoint `public/game-round-speeds` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		