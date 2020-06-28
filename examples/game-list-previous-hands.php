<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: game-list-previous-hands.php 
	** Endpoint: game/list-previous-hands
	** Name: Game -> List Previous Hands 
	** Description: Show all previous hands for a particular game by providing the `game_id`.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='game/list-previous-hands';

################
# Declare $post array
################
$post=array();

$post['game_id']='';
$post['limit']='10';
$post['page']='1';

################
# EXECUTE using specific function within class
################

$result = $obj->game_list_previous_hands($post);

################
# EXECUTE using send(); Provide the name of the endpoint `game/list-previous-hands` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		