<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: game-list-table-players.php 
	** Endpoint: game/list-table-players
	** Name: Game -> List Table Players 
	** Description: List all of the players on the provided `game_id` currently. This endpoint does not provide historical data.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='game/list-table-players';

################
# Declare $post array
################
$post=array();

$post['game_id']='';

################
# EXECUTE using specific function within class
################

$result = $obj->game_list_table_players($post);

################
# EXECUTE using send(); Provide the name of the endpoint `game/list-table-players` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		