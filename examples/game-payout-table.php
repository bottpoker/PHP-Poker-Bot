<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: game-payout-table.php 
	** Endpoint: game/payout-table
	** Name: Game -> Payout Table 
	** Description: The full payout table for the table. If the table type is an `RNG` then no table will exist.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='game/payout-table';

################
# Declare $post array
################
$post=array();

$post['game_id']='';

################
# EXECUTE using specific function within class
################

$result = $obj->game_payout_table($post);

################
# EXECUTE using send(); Provide the name of the endpoint `game/payout-table` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		