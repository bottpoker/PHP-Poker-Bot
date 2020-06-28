<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: game-create-ring-game.php 
	** Endpoint: game/create-ring-game
	** Name: Game -> Game Create Ring Game 
	** Description: This action is limited to users with the correct permissions. You must fill in all related information to the types. 

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='game/create-ring-game';

################
# Declare $post array
################
$post=array();

$post['name']='';

################
# EXECUTE using specific function within class
################

$result = $obj->game_create_ring_game($post);

################
# EXECUTE using send(); Provide the name of the endpoint `game/create-ring-game` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		