<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: game-create-tournament.php 
	** Endpoint: game/create-tournament
	** Name: Game -> Game Create Tournament 
	** Description: This action is limited to users with the correct permissions. You must fill in all related information to the types. 

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='game/create-tournament';

################
# Declare $post array
################
$post=array();

$post['name']='';
$post['password']='';
$post['table_size']='10';
$post['min_players']='10';
$post['max_players']='10';
$post['time_start']='0';
$post['paidout_places']='1';
$post['speed_id']='';

################
# EXECUTE using specific function within class
################

$result = $obj->game_create_tournament($post);

################
# EXECUTE using send(); Provide the name of the endpoint `game/create-tournament` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		