<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: public-leaderboards.php 
	** Endpoint: public/leaderboards
	** Name: Public -> Leaderboards 
	** Description: The leaderboards for each `equity_id`. Provided as a useful resource to know who you are playing.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='public/leaderboards';

################
# Declare $post array
################
$post=array();

$post['equity_id']='10';
$post['limit']='10';
$post['page']='1';

################
# EXECUTE using specific function within class
################

$result = $obj->public_leaderboards($post);

################
# EXECUTE using send(); Provide the name of the endpoint `public/leaderboards` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		