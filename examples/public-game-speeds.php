<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: public-game-speeds.php 
	** Endpoint: public/game-speeds
	** Name: Public -> Game Speeds 
	** Description: The parent `id` for `public/game-round-speeds`

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='public/game-speeds';

################
# Declare $post array
################
$post=array();


/* The endpoint */

################
# EXECUTE using specific function within class
################

$result = $obj->public_game_speeds($post);

################
# EXECUTE using send(); Provide the name of the endpoint `public/game-speeds` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		