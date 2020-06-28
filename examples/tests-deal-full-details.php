<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: tests-deal-full-details.php 
	** Endpoint: tests/deal-full-details
	** Name: Tests -> Tests Deal Full Details 
	** Description: Get the entire array of data of your test deal. Also look up the endpoints  `tests/deal-pockets` and  `tests/deal-community-cards`

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='tests/deal-full-details';

################
# Declare $post array
################
$post=array();

$post['test_id']='';

################
# EXECUTE using specific function within class
################

$result = $obj->tests_deal_full_details($post);

################
# EXECUTE using send(); Provide the name of the endpoint `tests/deal-full-details` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		