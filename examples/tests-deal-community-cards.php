<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: tests-deal-community-cards.php 
	** Endpoint: tests/deal-community-cards
	** Name: Tests -> Deal Community Cards 
	** Description: For testing your robots you can request community cards. This can be useful for testing robots without having to seat at a table.  The `test_id` is a required field for you to be able to request more cards such as pockets. Also consult the endpoint `tests/deal-pockets`. 

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='tests/deal-community-cards';

################
# Declare $post array
################
$post=array();

$post['test_id']='';
$post['request_amount']='';

################
# EXECUTE using specific function within class
################

$result = $obj->tests_deal_community_cards($post);

################
# EXECUTE using send(); Provide the name of the endpoint `tests/deal-community-cards` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		