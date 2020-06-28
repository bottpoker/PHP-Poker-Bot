<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: public-poker-list-sitandgo-games.php 
	** Endpoint: public/poker/list-sitandgo-games
	** Name: Public -> List Sit and Go Games 
	** Description: List all available sit and go games. This does not provide an historical view.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='public/poker/list-sitandgo-games';

################
# Declare $post array
################
$post=array();

$post['limit']='10';
$post['page']='1';

################
# EXECUTE using specific function within class
################

$result = $obj->public_poker_list_sitandgo_games($post);

################
# EXECUTE using send(); Provide the name of the endpoint `public/poker/list-sitandgo-games` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		