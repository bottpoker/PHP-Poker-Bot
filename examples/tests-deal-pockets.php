<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: tests-deal-pockets.php 
	** Endpoint: tests/deal-pockets
	** Name: Tests -> Deal Pockets 
	** Description: Related to the endpoint `test/deal-community-cards`. The `test_id` needs to be provided. Indicate with `how_many` you want to draw. A maximum of 10 is allowable.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='tests/deal-pockets';

################
# Declare $post array
################
$post=array();

$post['test_id']='';
$post['how_many']='1';

################
# EXECUTE using specific function within class
################

$result = $obj->tests_deal_pockets($post);

################
# EXECUTE using send(); Provide the name of the endpoint `tests/deal-pockets` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		