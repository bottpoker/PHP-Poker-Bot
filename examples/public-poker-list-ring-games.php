<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: public-poker-list-ring-games.php 
	** Endpoint: public/poker/list-ring-games
	** Name: Public -> List Ring Games 
	** Description: List all available ring games. This does not provide an historical view.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='public/poker/list-ring-games';

################
# Declare $post array
################
$post=array();

$post['limit']='10';
$post['page']='1';

################
# EXECUTE using specific function within class
################

$result = $obj->public_poker_list_ring_games($post);

################
# EXECUTE using send(); Provide the name of the endpoint `public/poker/list-ring-games` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		